<?php
	ini_set('max_execution_time', '300');
	echo "<html>\n";
	echo "<body>\n";
	echo "Please wait\n";
	echo "</body>\n";
	echo "</html>\n";
	flush();
	$tmp = `git clean -df`;
	$tmp = `git reset --hard`;
	$tmp = `git pull origin master`;
	header("Location: ../../");
?>