<?php 
chdir($url->path);
$output = shell_exec('git clean -df 2>&1');
echo "<pre>$output</pre>";
$output = shell_exec('git reset --hard 2>&1');
echo "<pre>$output</pre>";
$output = shell_exec('git pull https://github.com/Thundras/RPI_HAC master 2>&1');
echo "<pre>$output</pre>";
//`git clean -df`;
//`git reset --hard`;
//`git pull https://github.com/Thundras/RPI_HAC master`;
?>
