<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bata');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else { ?> 

<div class="alert alert-success"><em>Connection Success.</em></div><br>
  <p>The server: <? echo DB_SERVER; ?></p>
  <p>The username: <? echo DB_USERNAME; ?></p>
  <p>The password: <? echo DB_PASSWORD; ?></p>
  <p>The Database: <? echo DB_NAME; ?></p>

<?
    if (DB_PASSWORD === "") {
        echo "The password keep empty";
    } 
    else {
        echo "The password is hidden";
    }

}
?>