<?php
	session_start();
	require_once('include/debug.php');
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>Register - ecDB</title>
		<?php include_once("include/analytics.php") ?>
		
	</head>
	
	<body>
		<div id="wrapper">
			
			<!-- Header -->
			<div id="header">
				<div class="logoWrapper">
					<a href ="."><span class="logoImage"></span></a>
				</div>
			</div>
			<!-- END -->
			
			<!-- Main menu -->
			<div id="menu">
				<ul>
					<li><a href="index.php"><span class="icon medium key"></span> Connexion</a></li>
					<li><a class="selected"><span class="icon medium user"></span> S'enregistrer</a></li>
					<li><a href="about.php"><span class="icon medium document"></span> A propos</a></li>
				</ul>
			</div>
			<!-- END -->
			
			<!-- Main content -->
			<div id="content">
				
				<?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
						echo '<div class="message red">';
						echo '<ul class="error">';
						foreach($_SESSION['ERRMSG_ARR'] as $msg) {
							echo '<li>',$msg,'</li>'; 
						}
						echo '</ul>';
						echo '</div>';
						unset($_SESSION['ERRMSG_ARR']);
					}
				?>
				<div class="loginWrapper">
					<div class="left">
						<div class="aboutECDB">
							Vous voulez construire quelque chose et avez besoin de quelques composants pour votre projet. 
							Vous ne savez pas si vous avez ces composants, ou là où ils sont.
							C'est un problème que beaucoup d'entre nous reconnaîssons.  
							Nous voulons changer cela pour vous en faisant un système d'inventaire en ligne pour vos composants électroniques,et facile à utiliser.  
							Ajouter vos composants. Recherchez puis trouver le, et ensuite utilisez le!
						</div>
						<form class="globalForms" name="loginForm" method="post" action="register-exec.php">
							<div class="textInput">
								<label class="keyWord">Prenom</label>
								<div class="input"><input name="fname" type="text" class="medium" id="fname" /></div>
							</div>
							<div class="textInput">
								<label class="keyWord">Nom</label>
								<div class="input"><input name="lname" type="text" class="medium" id="lname" /></div>
							</div>
							<div class="textInput">
								<label class="keyWord">Nom d'utilisateur</label>
								<div class="input"><input name="login" type="text" class="medium" id="login" /></div>
							</div>
							<div class="textInput">
								<label class="keyWord">E-mail</label>
								<div class="input"><input name="mail" type="text" class="medium" id="mail" /></div>
							</div>
							<div class="textInput">
								<label class="keyWord">Mot de pass</label>
								<div class="input"><input name="password" type="password" class="medium" id="password" /></div>
							</div>
							<div class="textInput">
								<label class="keyWord">Répétez mot de pass</label>
								<div class="input"><input name="cpassword" type="password" class="medium" id="cpassword" onpaste="return false;" /></div>
							</div>
							<div class="buttons">
								En vous enregistrant, vous acceptez les <a href="terms.php">Contidions</a><br><br>
								<div class="input">
									<button class="button green" name="Submit" type="submit">Enregistrer</button>
								</div>
							</div>
						</form>
					</div>
					<div class="right"></div>
				</div>
			</div>
			<!-- END -->
			
			<!-- Text outside the main content -->
				<?php include 'include/footer.php'; ?>
			<!-- END -->
			
		</div>
	</body>
</html>
