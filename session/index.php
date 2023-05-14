<?php
    session_start();

    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] +=1;
    }else{
        $_SESSION['counter'] = 1;
    }
    $my_msg = "This page is visited ".$_SESSION['counter']." times";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starting PHP session</title>
</head>
<body>
<?php
    // set the sission variable 
    $_SESSION['favoriteColor'] = "green";
    $_SESSION['favoriteAnimal'] = "cat";

    echo "session variables are set.";

    echo ($my_msg);

    $_SESSION["login"] = true;


?>

    
</body>
</html>