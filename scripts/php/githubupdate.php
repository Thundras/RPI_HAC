<?php 
ini_set('max_execution_time', '100');
echo `git clean -df > nul 2>nul &`;
echo `git reset --hard > nul 2>nul &`;
echo `git pull origin master > nul 2>nul &`;
?>
