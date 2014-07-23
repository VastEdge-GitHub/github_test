<?php 
$output=shell_exec("/var/www/html/github_test/git pull 2>&1");
echo $output;
?>