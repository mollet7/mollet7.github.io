<?php 
header('Content-type: text/event-stream');
header('Cache-Control: no-cache');
$abc = 9;
echo "data: The server time is : {$abc}\n\n";
flush();
?>