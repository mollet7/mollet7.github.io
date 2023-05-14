<?php
// SERVER SIDE SCRIPT
$myObj = new stdClass();
$myObj->name = "Maulid Hamad";
$myObj->age = 31;
$myObj->city =  "Dar es Salaam";


$myJSON = json_encode($myObj);

echo $myJSON;
?>