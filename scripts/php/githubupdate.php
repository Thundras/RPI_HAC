<?php 
$myfile = fopen("update.php", "w") or die("Unable to open file!");
$txt = "<?php\n";
fwrite($myfile, $txt);
$txt = "echo \"<div align=center style='background-color:#FFCCCC' width=100%>New Update<br/><a href='scripts/php/doupdate.php'>Click here for Update</a></div>\n\";";
fwrite($myfile, $txt);
$txt = "?>\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
