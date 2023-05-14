<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $comment = htmlspecialchars(trim($_POST["comment"]));

        // Check if the values are empty
        if (!empty($name) && !empty($comment)) {
            echo "<p> Hi,<b>$name</b>. Your comments has been recieved successfully. </p>";
            echo "<p> here are the comments: <b>$comment</b></p>";
        } else {
            echo "<p> Please fill the field on the form!</p>";
        }
    } else {
            echo "<p> Something went Wrong!. Please try again! </p>";
    }
    

?>