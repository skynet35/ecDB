<div id="menu">
	<ul>
		<li><a href="." class="<?php if ($_SERVER["REQUEST_URI"] == '/' or $_SERVER["REQUEST_URI"] == '/index.php'or isset($_GET['view']) or isset($_GET['cat'])or isset($_GET['subcat']) or isset($_GET['edit']) or isset($_GET['based'])){echo 'selected';}?>"><span class="icon medium inbox"></span> Mes composants</a></li>
		<li><a href="add.php" class="<?php if ($_SERVER["REQUEST_URI"] == '/add.php'){echo 'selected';}?>"><span class="icon medium sqPlus"></span> Ajout Composant</a></li>
		<li><a href="shoplist.php" class="<?php if ($_SERVER["REQUEST_URI"] == '/shoplist.php'){echo 'selected';}?>"><span class="icon medium shopCart"></span> Liste panier</a></li>
		<li><a href="proj_list.php" class="<?php if ($_SERVER["REQUEST_URI"] == '/proj_list.php' or isset($_GET['proj_id'])){echo 'selected';}?>"><span class="icon medium cube"></span> Projets</a></li>
		<li><a href="my.php" class="<?php if ($_SERVER["REQUEST_URI"] == '/my.php'){echo 'selected';}?>"><span class="icon medium user"></span> Mon compte</a></li>
	</ul>
</div>
