<?php 
ini_set('max_execution_time', '100');
echo `git clean -df 2>&1`;
echo `git reset --hard 2>&1`;
echo `git pull origin master 2>&1`;
?>
