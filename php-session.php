<?php
    // start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Variables</title>
</head>
<body>
    <?php
    // set the sission variable 
    $_SESSION['favoriteColor'] = "green";
    $_SESSION['favoriteAnimal'] = "cat";

    echo "session variables are set.";


    ?>
</body>
</html>