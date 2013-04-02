<?php require("/config/imports.php"); ?>
<html>
	<header>
		<title>PHP Admin</title>
		<?php javascript_include_tag("application.js"); ?>
		<?php stylesheet_link_tag("application.css"); ?>
	</header>
	<body>
		<?php render_partial("php_admin/header"); ?>
		<?php render_partial("php_admin/navigation"); ?>

		<?php yield(); ?>
		
		<?php render_partial("php_admin/footer"); ?>
	</body>
</html>