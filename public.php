<?php
	require_once('include/login/auth.php');
	require_once('include/debug.php');
	include('include/mysql_connect.php');
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta name="description" content="View you component that you offer to the public."/>
		<meta name="keywords" content="electronics, components, database, project, inventory"/> 
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>Home - ecDB</title>
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
				<h1>Composants Public</h1>
				
				<div class="message orange">
					Lorsque vous ajoutez un composant, il ya un bouton appelé "public". Si vous selectionnez "oui", cela signifie que d'autres personnes peuvent voir que vous possédez ce composant. <br /><br />
					
					L'idée de ce paramètre est de, par exemple: Vous construisez un projet et ne voulez pas passer une commande pour un composant, pour éviter un coûts élevés d'expédition, un délais, etc. vous faite une recherche rapide sur ECDB pour ce composant et contacter le propriétaire. S'il est assez aimable, il pourra vous envoyer ce composant rapidement avec un petit supplément (prix d'un timbre).
				</div>
				
				<h1>En cours de développement</h1>
			</div>
			<!-- END -->
			<!-- Text outside the main content -->
				<?php include 'include/footer.php'; ?>
			<!-- END -->
		</div>
	</body>
</html>
