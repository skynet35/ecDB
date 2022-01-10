<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	require_once('include/debug.php');
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>Login - ecDB</title>
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
					<li><a href="."class="selected"><span class="icon medium key"></span> Connexion</a></li>
					<li><a href="register.php"><span class="icon medium user"></span> S'enregistrer</a></li>
					<li><a href="about.php"><span class="icon medium document"></span> A propos</a></li>
				</ul>
			</div>
			<!-- END -->
			
			<!-- Main content -->
			<div id="content">
				<div class="message green center">
					Vous vous êtes déconnecté avec succès.
				</div>
				
				<div class="loginWrapper">
					<div class="left">
						<div class="aboutECDB">
							Vous voulez construire quelque chose et besoin de quelques composants de votre projet. 
							Vous ne savez pas si vous avez ces composants, ou là où ils sont. 
							C'est un problème que beaucoup d'entre nous reconnaîssons. 
							Nous voulons changer cela pour vous en faisant un système d'inventaire en ligne pour vos composants électroniques qui est facile à utiliser. 
							Ajouter vos composants. Recherche pour le trouver, et ensuite l'utiliser!
						</div>
						<form class="globalForms" name="loginForm" method="post" action="login-exec.php">
							<div class="textInput">
								<label class="keyWord">Identifiant</label>
								<div class="input"><input name="login" class="medium" type="text" id="login"/></div>
							</div>
							<div class="textInput">
								<label class="keyWord">Mot de pass</label>
								<div class="input"><input name="password" class="medium" type="password" id="password"/></div>
							</div>
							<div class="buttons">
								<div class="input">
									<button class="button green" name="Submit" type="submit"><span class="icon medium key"></span> Login</button>
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

