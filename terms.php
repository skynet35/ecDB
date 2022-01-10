<?php
	require_once('include/debug.php');
	require_once('include/login/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
	<head>
		<link rel="stylesheet" type="text/css" href="include/style.css" media="screen"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple.png" />
		<title>Terms & Privacy - ecDB</title>
		<?php include_once("include/analytics.php") ?>

	<body>
		<div id="wrapper">
			<?php
				if(isset($_SESSION['SESS_MEMBER_ID'])){
					echo '<!-- Header -->';
						include 'include/header.php';
					echo '<!-- END -->';

					echo '<!-- Main menu -->';
						include 'include/menu.php';
					echo '<!-- END -->';
				}
				else {
					echo '<!-- Header -->';
						include 'include/header_public.php';
					echo '<!-- END -->';

					echo '<!-- Main menu -->';
						include 'include/menu_public.php';
					echo '<!-- END -->';
				}
			?>
			<!-- Main content -->
			<div id="content">
				<h1>Conditions et politique de confidentialité</h1>

					<h2>1 . Conditions</h2>

					En accédant à ce site Web , vous acceptez d'être lié par ces sites Web Conditions générales d'utilisation , toutes les lois et réglementations applicables , et convenez que vous êtes responsable du respect des lois localement applicables . Si vous n'êtes pas d'accord avec l'une de ces conditions, vous n'êtes pas autorisé à utiliser ou accéder à ce site . Les matériaux contenus dans ce site web sont protégés par droit d'auteur et droit des marques<br /><br />

					<h2>2 . Adhésion</h2>

					Comme condition à l'utilisation des services que vous devez vous enregistrer avec ECDB . En vous inscrivant à ECDB vous certifiez que vous fournissez toujours des informations valables , et mis à jour , vous êtes un individu (ie , pas une personne morale ) et que vous avez les droits légaux pour entrer un tel accord . L'ID et le mot de passe ( à partir de maintenant dénommé « login- données " ) est de la seule responsabilité . Il est nécessaire que vous , en tant qu'utilisateur enregistré ECDB maintenir la sécurité de vos propres données login .<br /><br />

					ECDB conserve le droit de résilier votre abonnement à tout moment , avec ou sans motivation ou un avertissement . Tous les membres sont responsables des conséquences de l'utilisation de ce site. En cas de conflit avec un ou plusieurs non- membres ou membres , sera ECDB pas responsable de tout dommage causé , dans la situation actuelle ou future , résultant du conflit .<br /><br />

					En tant qu'utilisateur ECDB enregistré, vous garantissez et acceptez le fait que vous ne serez pas contribuer tout contenu ( a) viole , viole ou autrement interfère avec les droits d'auteur ou de la marque d'une autre partie , ( b ) révéler un secret commercial , sauf si vous possédez l' secret commercial ou a la permission du propriétaire pour le mettre , ( c ) enfreint les droits de propriété intellectuelle d'un tiers ou à la vie privée ou aux droits d'un autre , ( d) est diffamatoire, injurieux, menaçant , harcelant, offensant ou autrement viole tout droit ou à droite d'un tiers .<br /><br />

					<h2>3 . Responsabilité</h2>

					ECDB réserve tous les droits et décline toute responsabilité . ECDB ne donne aucune garantie de fiabilité, de sécurité ou le fonctionnement de ce site .<br />
					En tant qu'utilisateur enregistré , vous avez l'entière responsabilité , sans contradiction , pour les informations que vous publiez et de faire largement disponibles ici .<br /><br />

					<h2>4 . Propriété</h2>

					Il est strictement interdit de copier, distribuer , ou modifier tout matériau de ECDB . Vous pouvez imprimer des documents pour un usage privé . Pour toute autre utilisation nécessite l'autorisation de ECDB .<br /><br />

					<h2>5 . Site Conditions d'utilisation modifications</h2>

					ECDB peut réviser ces conditions d'utilisation à tout moment sans préavis . En utilisant ECDB vous acceptez d'être lié par la version alors en vigueur de ces Termes et Conditions d'utilisation .<br /><br />

					<h2>Politique de confidentialité</h2>

					ECDB gère vos renseignements personnels en conformité avec les lois européennes de protection des données .<br /><br />

					Les tiers peuvent avoir accès à toutes les informations vous aviez l'intention de rendre public à travers vos paramètres . Votre adresse e-mail ou d'autres données personnelles ne sont jamais communiquées par nous à des tiers .
			</div>
				<!-- END -->
				<!-- Text outside the main content -->
					<?php include 'include/footer.php'; ?>
				<!-- END -->
		</div>
	</body>
</html>
