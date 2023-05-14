<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
    <style>
        span {
            background-color: yellow;
            color: black;
        }
    </style>
</head>
<body>
    
    <hr>
    <h1>JSON.parse</h1>
    <p>When receving data from the webserver, the data is always a <span>string</span></p>
    <p>We use function <span>JSON.parse()</span>and the data becomes a <span>Javascript Object</span></p>
    <code>
       <h1> string ---> JSON.parse() ----> JS Object</h1>
    </code>

    <h3>Example:</h3>
    <h2>Creating an object from a JSON string</h2>
    <h3 id="demo"></h3>
    <h3 id="result"></h3>
    <script>
        const txt = '{"name":"Maulid","age":30,"city":"Dar es salaam"}';
        const numbers = '{"one":1,"two":2,"three":3,"four":4,"five":5,"six":6,"seven":7,"eight":8,"nine":9,"ten":10}';
        const numbers_obj = JSON.parse(numbers);
        const obj = JSON.parse(txt);
        document.getElementById("demo").innerHTML = obj.name + ", " + obj.age + ", " + obj.city;
        document.getElementById("result").innerHTML = numbers_obj.one + ", " + numbers_obj.two + ", " + numbers_obj.three;
    </script>
    <hr>
  <h1>Array as JSON</h1>
  <p>when using the JSON.PARSE() on a JSON derived from an array, the method will return a <span>Javascript array</span>, instead of a Javascript Object</p>
  <h3>Example</h3>
  <h2>Parsing a JSON Array</h2>
  <p id="demo2"></p>
  <script>
    const text_array = '["Ford","BMW","Audi","Fiat"]';
    const myArr = JSON.parse(text_array);
    document.getElementById("demo2").innerHTML = myArr[0]+" is best car";
    array_lenght = myArr.length;
    console.log(array_lenght);

  </script>
<hr>

<a href="json1.php" class="next">Next</a>


</body>
</html>