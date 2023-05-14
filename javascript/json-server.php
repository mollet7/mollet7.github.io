<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON | SERVER</title>
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
    <h1>JSON SERVER</h1>
    <p>A common use of JSON is to exchange data to/from a web server.</p>
    <p>When receiving data from a web server, the data is always a string.</p>
    <p>Parse the data with<span>JSON.parse()</span>and the data becomes a JavaScript object.</p>
    <div class="container">
        <div class="side-a">
            <h2>Sending Data</h2>
            <p>if you have data stored in a <span>JavaScript object</span>, you can convert into JSON, and send it to a <span>server:</span> </p>
         
        <code>
            
                const names_obj = {name: "Maulid", age: 31, city:"Qatar"}; <br>
                const names_txt = JSON.stringify(names_obj); <br>
                window.location = "demo_json.php?x=" + names_txt; <br>
            
        </code>
        </div>
            <div class="side-b">
                <h2>Receving Data</h2>
                <p>If you receive datain JSON format, you can easly convert it into a JavaScript Object:</p>
            <code>
                const myJSON = '{"name":"John", "age":31, "city":"New York"}';<br>
                const myObj = JSON.parse(myJSON);<br>
                document.getElementById("demo").innerHTML = myObj.name;<br>
            </code>
        </div>


        <div class="side-a">
            <h1>JSON from a server</h1>
            <p>You can <span> request JSON</span>  from the server by using an <span>AJAX</span> request</p>
            <h2>Fetch a JSON file with XMLHttpRequest</h2>
            <p id="result"></p>
            <script>
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function(){
                    const myObj = JSON.parse(this.responseText);
                    document.getElementById("result").innerHTML = myObj.name + " "+ myObj.age + " ";
                }
                xmlhttp.open("GET", "json_demo.txt");
                xmlhttp.send();
            </script>
            <code>
                const xmlhttp = new XMLHttpRequest();<br>
                xmlhttp.onload = function(){ <br>
                    const myObj = JSON.parse(this.responseText); <br>
                    document.getElementById("result").innerHTML = myObj.name; <br>
                } <br>
                xmlhttp.open("GET", "json_demo.txt"); <br>
                xmlhttp.send(); <br>
            </code>
        </div>
        <div class="side-b">
            <h2>Array as JSON</h2>
            <p>When using the JSON.parse() on JSON derived from an array, the method will return a JavaScript array, instead of a javascript object.</p>
            <h3>Example</h3>
            <code>
                const xmlhttp = new XMLHttpRequest(); <br>
                xmlhttp.onload = function() { <br>
                const myArr = JSON.parse(this.responseText); <br>
                document.getElementById("demo").innerHTML = myArr[0]; <br>
                } <br>
                xmlhttp.open("GET", "json_demo_array.txt", true); <br>
                xmlhttp.send(); <br>
            </code>
            <p>Data is json_demo_array.txt are [ "Ford", "BMW", "Audi", "Fiat" ]</p>
            <p>Result is <span>Ford</span></p>
            

        </div>
    </div>
    <a href="json-php.php" class="next">NEXT</a>
</body>
</html>