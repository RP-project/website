<?php
	session_start();
	define( 'ABSPATH', dirname(__FILE__) . '/' );

	require(ABSPATH."includes/config.php");		$pageFile="not_found.php";		if(isset($_GET["page"])) {		switch($_GET["page"]) {			case "index.html":				$pageFile="index.php";			break;		}	} else {		$pageFile="index.php";	}
?><!DOCTYPE html><html lang="fr">	<head>		<meta charset="utf-8"/>		<style type="text/css">			<?php								require(ABSPATH."templates/common.css");							?>		</style>		<title>RP-Project</title>	</head>	<body>		<?php			require(ABSPATH."templates/background.php");			require(ABSPATH."templates/header.php");		?>		<?php			require(ABSPATH."pages/".$pageFile);		?>		<?php			require(ABSPATH."templates/footer.php");		?>	</body></html>