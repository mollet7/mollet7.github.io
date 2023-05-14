<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $name = $_POST["name"];
        echo "<h2>Hi, <b>$name</b>.";
    } else {
        echo "Something wrong line 6";
    }
?>