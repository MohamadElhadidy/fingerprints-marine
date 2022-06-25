<?php 
    // for vps 
    $output = shell_exec('python3 /var/www/html/fingerprints/lib/run.py');
    // for pc
    //$output = shell_exec('python lib/run.py');
    echo $output; 
?>