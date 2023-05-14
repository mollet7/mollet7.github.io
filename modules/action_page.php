<?php
    // connect to mysql database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tozi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn -> connect_error){
        die("Connection failed: ".$conn -> conect_error);
    }

    // check if form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get username and password from form
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "<p>The user you entered " . $username . " and password " . $password . "</p>";


        // Query database for user with matching credintials
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result -> num_rows > 0 ){
            // Auth success
            echo "Login successful!";
            header("Location: index.php");
        } else {
            // Auth failed
            echo "Invalid username or passoword";
            // Prepare and execute SQL query with parameter binding
            $stmt = $conn->prepare("INSERT INTO attemp_users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $password);
            if ($stmt->execute()) {
                echo "&nbsp;Try Again!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            $conn->close();

        }
        

    }
?>