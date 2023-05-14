<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON | PHP</title>
    <style>
        span {
            background-color: yellow;
            color: black;
            padding: 2px;
        }
        .container {
            display: grid;
            grid-template-columns: auto auto;
        }
        .side-a {
            border: 1px dotted green;
            
        }
        .side-b {
            border: 1px dotted blue;
        }
        code {
            background-color: black;
            color: azure;
            font-size: 19px;
        }
    </style>
</head>
<body>
    <h1>JSON PHP</h1>
    <p>A common use of JSON is to read data from <span>Web server</span> and display the data in <span>web page</span></p>
    <p>PHP has some built-in functions to handle JSON.</p>
    <P>Object in PHP can be coverted into JSON by using the PHP function <span>json_encode():</span></P>
    <p></p>
    <div class="container">
        <div class="side-a">
            <h3>Example
            </h3>
            <code>
                $myObj = new stdClass(); <br>
                $myObj -> name = "Maulid"; <br>
                $myObj -> age = 30; <br>
                $myObj->city = "New York"; <br>

                $myJSON = json_encode($myObj); <br>

                echo $myJSON; <br>
            </code>
            <p>Result</p>
            <?php
                $myObj = new stdClass();
                $myObj -> name = "Maulid";
                $myObj -> age = 30;
                $myObj->city = "New York";

                $myJSON = json_encode($myObj);

                echo $myJSON;
            ?>
        </div>

        <div class="side-b">
            <p>The client side Javascript, which request the PHP file from the server </p>
           <h3>Example</h3>
           <code>
           const xmlhttp = new XMLHttpRequest();<br>

            xmlhttp.onload = function() { <br>
            const myObj = JSON.parse(this.responseText); <br>
            document.getElementById("demo").innerHTML = myObj.name; <br>
            } <br>
            xmlhttp.open("GET", "demo_file.php"); <br>
            xmlhttp.send(); <br>
           </code> 
           <p>Result:</p>
           <p><span>Maulid</span></p>

        </div>
    </div>
    <h4>PHP Array is same as previous</h4>

    <a href="json-php-database.php" class="next">NEXT</a>
</body>
</html>