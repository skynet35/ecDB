<?php
	require_once('include/debug.php');
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>About - ecDB</title>
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
					<li><a href="."><span class="icon medium key"></span> Connexion</a></li>
					<li><a href="register.php"><span class="icon medium user"></span> S'enregistrer</a></li>
					<li><a href="about.php" class="selected"><span class="icon medium document"></span> A propos</a></li>
					<li><a href="/blog"><span class="icon medium docLinesStright"></span> Blog</a></li>
				</ul>
			</div>
			<!-- END -->
			
			<!-- Main content -->
			<div id="content">
				<div class="loginWrapper">
					<div class="left">
						<div class="message blue">
							Check out the new <a href="/blog">ecDB blog.</a> Or follow <a href="https://twitter.com/#!/ecDBnet">@ecDBnet</a> at Twitter to get the latest updates!
						</div>
						<h1>Qu'est-ce que ecDB?</h1>
							
							ECDB est essentiellement un lieu où vous, comme un amateur en électronique (ou professionnel) pouvez ajouter vos propres composants à votre base de données personnelle pour garder une trace des composants que vous possédez, où ils sont, combien vous en possédez et ainsi de suite.
								
						<br /><br />
						<a href="img/about/index.png"><img src="img/about/index_thumbnail.png"></a>				
						<a href="img/about/add.png"><img src="img/about/add_thumbnail.png"></a><br /><br />
						<h1>Qui & Quoi?</h1>
								
							ecDB a ete cree par <a target="_blank" href="http://nilsf.se">Nils Fredriksson</a> and conçu avec <a target="_blank" href="http://www.buildlog.eu">Buildlog</a>. <br /><br />
								
							J'ai toujours voulu avoir un système permettant de garder une trace des composants que je possède. Avant de créer ce système  (je suppose que vous aussi ...),je devais fouiller dans mes boîtes remplies de composants pour trouver, peut-être, le composant dont j'avais besoin. C'était une tâche nécessaire, prennant du temps, et aussi être très frustrante. J'ai donc fini par créer ce site où je peux facilement garder une trace de mes composants! 
							
						<br /><br />
						<h1>Combien cela coûte?</h1>
						
							ecDB est complètement gratuit!<br />
							Mais si vous aimez ECDB, vous pouvez utiliser ce bouton pour nous donner de l'argent.
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="7ZT5UY5XMHA52">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							</form>
							
						<br />
						<h1>Est-ce que EcDB est terminé?</h1>
						Non! ECDB est encore en développement. Voici quelques-unes des fonctionnalités à venir:<br /><br />
						
						- Composantes publiques - un endroit où vous pouvez facilement échanger des composants. <br />
						- Voir et imprimer la base de données personnelle, avec une bonne mise en forme texte/colonnes! <br />
						- Chargement de datasheet et d'images.<br />
						- Recherche avancée de composants avec différents paramètres.<br />
						- Connectez-vous pour chaque composant. Voir lorsque le dernier composant a été utilisé / modifié / etc acheté .<br />
						- La mise en œuvre de codes à barres pour la gestion du stockage facile. <br />
						- Importation et exportation de base de données personnelle au texte / tableur. <br />
						- Fonction d'édition rapide de données de composants directement à partir de la vue de base de données. <br />
						- Ajouter des catégories et des champs personnels<br />
						- Emprunter des données de composants provenant d'autres composants dans la base de données d'ajouter facilement des composants.
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
