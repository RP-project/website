<?php
	session_start();
	define( 'ABSPATH', dirname(__FILE__) . '/' );

	require(ABSPATH."includes/config.php");
?><!DOCTYPE html><html lang="fr">	<head>		<meta charset="utf-8"/>		<style type="text/css">			<?php								require(ABSPATH."templates/common.css");							?>		</style>		<title>RP-Project</title>	</head>	<body>		<?php			require(ABSPATH."templates/background.php");			require(ABSPATH."templates/header.php");			// require(ABSPATH."templates/speedbar.php");		?>		<?php			require(ABSPATH."templates/footer.php");		?>	</body></html>