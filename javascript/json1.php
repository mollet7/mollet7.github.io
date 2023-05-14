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
    <h1>JSON.stringify()</h1>
<p>When sending data to <span>Webserver,</span> the data has to be a<span>string</span></p>
<p>Convert a  <span> javascript object</span> into a <span>string</span> with  <span><b>JSON.stringify()</b></span> </p> 
<code>----------------------------------------------------------------
    <h1>javascript object ----> JSON.stringify() ---> JSON string</h1>
    ------------------------------------------------------------------
</code>
<h3>Example:</h3>
<h2>Create a JSON string from a JavaScript object.</h2>
<p id="demo"></p>

<script>
const obj = {name: "John", age: 30, city: "New York"};
const myJSON = JSON.stringify(obj);
document.getElementById("demo").innerHTML = myJSON;
</script>

<h1>stringify a JavaScript Array</h1>
<p>Its also possible to stringify JavaScript arrays using <span>JSON.stringfy()</span> to convert it into a string.
<h3>Example</h3>
<h2>Create a JSON string from a JavaScript array.</h2>
<p id="demo2"></p>

<script>
    const arr = ["John", "Peter", "Sally", "Jane"];
    const myJSON2 = JSON.stringify(arr);
    document.getElementById("demo2").innerHTML = myJSON2;
</script>

<a href="json2.php" style="text-align: center;">NEXT</a>

</body>
</html>