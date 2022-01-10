<div id="copyText">
    <div class="leftBox">
        <div>© 2010 - <?php echo date('Y'); ?> ecDB - Cree par <a href="http://nilsf.se">Nils Fredriksson</a> - <a href="contact.php">Contactez nous</a> - <a href="terms.php">Terms & Privacy</a></div>
        <div class="stats">
            <?php include_once('include/mysql_connect.php'); ?>

        	<?php $members = mysqli_num_rows(mysqli_query($link, "SELECT member_id FROM members")); echo $members; ?>
			<span class="boldText">Membre</span>,

			<?php $components = mysqli_num_rows(mysqli_query($link, "SELECT id FROM data")); echo $components; ?>
			<span class="boldText">Composants </span>et

			<?php $projects = mysqli_num_rows(mysqli_query($link, "SELECT project_id FROM projects")); echo $projects; ?>
			<span class="boldText">projets</span>.

        </div>
    </div>
    <div class="rightBox">
        Design by <a href="http://www.buildlog.eu"><span class="blIcon"></span></a>
    </div>
</div>
