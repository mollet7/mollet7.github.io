<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Passed sission</title>
</head>
<body>
    <?php
        // echo session variable that were set on pre page
    echo "Favorite colr is ".$_SESSION["favoriteColor"].".<br>";
    echo "Favorite Aminal is ".$_SESSION["favoriteAnimal"]."<br>";
    ?>
</body>
</html>