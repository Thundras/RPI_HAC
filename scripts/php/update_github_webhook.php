<?php 
$myfile = fopen("update_status.php", "w") or die("Unable to open file!");
$txt = "<?php\n";
fwrite($myfile, $txt);
$txt = "echo \"<div align=center style='background: rgba(255, 0, 0, 0.5)' width=100%>New Update<br/><a href='scripts/php/update_pleasewait.php'>Click here for Update</a></div>\";\n";
fwrite($myfile, $txt);
$txt = "?>\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
