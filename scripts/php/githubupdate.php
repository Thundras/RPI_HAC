<?php 
$myfile = fopen("update.php", "w") or die("Unable to open file!");
$txt = "<?php\n";
fwrite($myfile, $txt);
$txt = "echo \"<div align=center style='background: rgba(255, 0, 0, 0.5)' width=100%>New Update<br/><a href='scripts/php/doupdate.php'>Click here for Update</a></div>\n\";";
fwrite($myfile, $txt);
$txt = "?>\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
