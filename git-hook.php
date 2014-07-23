<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);
 
try {
 
  $payload = json_decode($_REQUEST['payload']);
 
}
catch(Exception $e) {
 
    //log the error
    file_put_contents('/var/www/html/github_test/github.txt', $e . ' ' . $payload, FILE_APPEND);
 
      exit(0);
}
 
if ($payload->ref === 'refs/heads/master') {
 
    $project_directory = '/var/www/html/github_test/';
 
    $output = shell_exec("/var/www/html/github_test/scripts1.sh");
 
    //log the request
    file_put_contents('/var/www/html/github_test/github.txt', $output, FILE_APPEND);
 
}
?>