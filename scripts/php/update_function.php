<?php
	
	ini_set('max_execution_time', '300');
	echo "1234";
	$tmp = `git clean -df`;
	$tmp = `git reset --hard`;
	
	header("/");
	/*
	$tmp = `git clean -df`;
	$tmp = `git reset --hard`;
	$tmp = `git pull origin master`;
	*/
?>