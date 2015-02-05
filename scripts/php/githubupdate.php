<?php 
ini_set('max_execution_time', '100');
echo `git clean -df > /dev/null 2>/dev/null &`;
echo `git reset --hard > /dev/null 2>/dev/null &`;
echo `git pull origin master > /dev/null 2>/dev/null &`;
?>
