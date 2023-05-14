<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // echo session variable that were set on pre page
    echo "Favorite colr is ".$_SESSION["favoriteColor"].".<br>";
    echo "Favorite Aminal is ".$_SESSION["favoriteAnimal"]."<br>";

    echo " The user is login ?".$_SESSION['login']."<br>";
    if ($_SESSION['login'] === 1){
        echo "The user is alredy in";
    } else {
        echo "User not login";
    }

    ?>
</body>
</html>