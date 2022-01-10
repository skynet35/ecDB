<?php
	require_once('include/login/auth.php');
	require_once('include/debug.php');
	
	if(isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		
		if ($id == 1) {
			$message = "Vous n'avez pas la permission de voir ce composant.";
		}
		elseif ($id == 2) {
			$message = "Vous n'avez pas la permission d'éditer ce composant.";
		}
		elseif ($id == 3) {
			$message = "Oups !!";
		}
		else {
			$message = "";
		}
	}
	if (empty($_GET['id'])) {
		$message = 'Erreur!';
	}
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>Error - ecDB</title>
		<?php include_once("include/analytics.php") ?>
		
	</head>
	<body>
		<div id="wrapper">
			<!-- Header -->
				<?php include 'include/header.php'; ?>
			<!-- END -->
			<!-- Main menu -->
				<?php include 'include/menu.php'; ?>
			<!-- END -->
			<!-- Main content -->
				<div id="content">
					<div class="message red">
						<?php echo $message; ?>
					</div>
				</div>
			<!-- END -->
			<!-- Text outside the main content -->
				<?php include 'include/footer.php'; ?>
			<!-- END -->
		</div>
	</body>
</html>
