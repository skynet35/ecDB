<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('include/login/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error($link));
	}
	
	//Select database
	$db = mysqli_select_db($link, DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	mysqli_set_charset($link, 'utf8');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($link, $str);
	}
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$login = clean($_POST['login']);
	$mail = clean($_POST['mail']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'Il manque le nom';
		$errflag = true;
	}
	if (strlen($fname) <= 2){
		$errmsg_arr[] = 'Minimum de 2 caractères pour le nom';
		$errflag = true;
	}
	if($mail == '') {
		$errmsg_arr[] = 'Il manque le mail';
		$errflag = true;
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		$errmsg_arr[] = 'e-mail invalide';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Prenom manquant';
		$errflag = true;
	}
	if (strlen($lname) <= 2){
		$errmsg_arr[] = 'Minimum de 2 caractères pour le prenom';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Nom d utilisateur manquant';
		$errflag = true;
	}
	if (strlen($login) <= 2){
		$errmsg_arr[] = 'Minimum de 2 caractères pour l utilisateur';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Mot de pass manquant';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirmation Mot de pass manquant';
		$errflag = true;
	}
	if (strlen($password) <= 5){
		$errmsg_arr[] = 'Minimum de 5 caractères pour le mot de pass';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Mot pass non identique';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysqli_query($link,$qry);
		if($result) {
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'L utilisateur existe deja';
				$errflag = true;
			}
			@mysqli_free_result($result);
		}
		else {
			die("Demande refusée");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: register.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO members(firstname, lastname, login, mail, passwd) VALUES('$fname','$lname','$login','$mail','".md5($_POST['password'])."')";
	$result = @mysqli_query($link,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: register-success.php");
		exit();
	}else {
		die("Demande refusée");
	}
?>
