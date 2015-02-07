<?php
	include("/scripts/php/page_header.php");
	
	$page = ((isset($_GET["page"])) ? $_GET["page"] : "");
	
	switch($page){
		case "update":
			include "/scripts/php/update_pleasewait.php";
			break;
		default:
			include "/scripts/php/content_home.php";
			break;
	}
	
	include("/scripts/php/page_footer.php");
?>
