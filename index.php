<?php
	include("/scripts/php/page_header.php");
	
	$page = ((isset($_GET["page"])) ? $_GET["page"] : "home");
	
	switch($page){
		case "home":
			include "/scripts/php/content_home.php";
			break;
		case "update":
			include "/scripts/php/update_pleasewait.php";
			break;
	}
	
	include("/scripts/php/page_footer.php");
?>
