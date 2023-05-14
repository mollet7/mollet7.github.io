<?php
if(isset($_GET["fname"]) && isset($_GET["lname"])){
    $fname = htmlspecialchars($_GET["fname"]);
    $lname = htmlspecialchars($_GET["lname"]);

    //Creating full name by joining first and last name
    $fullname = $fname. " ". $lname;

    // Displaying a welcome message
    echo "Hello, $fullname! Welcome to your website.";
}
else {
    echo "Welcome!";
}

?>