<?php 
/*
ini_set('max_execution_time', '300');
echo `git clean -df > nul 2>nul &`;
echo `git reset --hard > nul 2>nul &`;
echo `git pull origin master > nul 2>nul &`;
*/
<?php
$myfile = fopen("scripts/php/update.php", "w") or die("Unable to open file!");
$txt = "<?php\n";
fwrite($myfile, $txt);
$txt = "echo ""Minnie Mouse\n"";";
fwrite($myfile, $txt);
$txt = "?>\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
?>
