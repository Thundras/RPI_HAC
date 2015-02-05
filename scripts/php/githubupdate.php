<?php 
$output = shell_exec('git clean -df');
echo "<pre>$output</pre>";
$output = shell_exec('git reset --hard');
echo "<pre>$output</pre>";
$output = shell_exec('git pull https://github.com/Thundras/RPI_HAC master');
echo "<pre>$output</pre>";
//`git clean -df`;
//`git reset --hard`;
//`git pull https://github.com/Thundras/RPI_HAC master`;
?>
