<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON | PAGE-3</title>
    <style>
        span {
            background-color: yellow;
            color: black;
            padding: 2px;
        }
    </style>
</head>
<body>
   <h1>Storing Data</h1>
   <p> <q>text</q> is best and legal formats to store data. </p>
   <p>JSON makes it possible to store JavaScript objects as <span>text</span></p>
    <h3>Example</h3>
    <h4>Store and retrieve data from local storage</h4>
    <h2 id="demo"></h2>
    <script>
        // storing data:
        const myObj = { name: "John", age: 31, city: "New York" };
        const myJSON = JSON.stringify(myObj);
        localStorage.setItem("testJSON", myJSON);

        // Retrieving data
        let text = localStorage.getItem("testJSON");
        let obj = JSON.parse(text);
        document.getElementById("demo").innerHTML = obj.name+ " is "+ obj.age + " Year old";
    </script>

    <p>We store in local storage by object method <span>localStorage.setItem("Variable", cre_object)</span></p>
    <p>We retrieve the data by object method of <span>localStorage.getItem("variable")</span></p>
    <a href="json3.php" class="next">NEXT</a>
    
</body>
</html>