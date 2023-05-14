<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON | PAGE 4</title>
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
    </style>
</head>
<body>
<div class="container">
    <div class="side-a">
        <h1>JSON <span>Object</span> Literals</h1>
        <p>Here is JSON string:</p>
        <code>
            <h2>'{"key1":value1,"key2":"value2"}'</h2>
        </code>
        <p>Here is a JSON OBJECT literals</p>
        <code>
            <h2>{"key1":value1,"key2":"value2"}</h2>
        </code>

        <p>Did you find the diffrent? <span><b>''</b></span> </p> 
        <li>JSON object literals are surrounded by curly braces <span>{ }</span></li>
        <li>JSON object literals contain <span>key/vlaue pairs</span></li>
        <li>Keys and value are separeted by a colon.</li>
        <li>Keys must be <span>string</span> and values must be a valid <SPan>JSON </SPan>data type:</li>
        <ul>
            <li>string</li>
            <li>number</li>
            <li>object</li>
            <li>array</li>
            <li>bollean</li>
            <li>null</li>
            <p>Each key/value pair is separated by a comma</p>
        </ul>
    </div>

    <div class="side-b">
        <h1>JavaScript Objects</h1>
        <p>You can create a javascript object from a JSON object literal</p>
        <code>
            <h2>
                const myObj = {"name":"John", "age":30, "car":null};  
            </h2>
        </code>
        <p>Normaly, you create a javascript object by parsing a JSON string:</p>
        <code>
            <h2>
                myJSON = '{"name":"John", "age":30, "car":null}';<br>
                myObj = JSON.parse(myJSON);  
            </h2>
        </code>
     <h1>Accessing Object Value</h1>
     <p>You can access object values by using <span>dot (.)</span>notation:</p>
     <code>
        <h2>x = myObj.name;</h2>
     </code>
     <p>Also you can acces object values by using bracket ([]) notation:</p>
     <code>
        <h2>x = myObj["name"];</h2>
     </code>

    </div>

    <div class="side-a">
        <h1>Object <span>looping</span></h1>
        <p>You can loop through the object properties with a <span> for-in loop:</span></p>
      <h3>Example:</h3>
      <h4 id="th1"></h4>
      <h4 id="th2"></h4>
      <script>
        const names = '{"name":"Maulid","age":30,"car":null}';
        const name_obj = JSON.parse(names);

        // looping...
        let text = "";
        for (const x in name_obj){
            text += x + ",   ";
            
        }
        document.getElementById("th1").innerHTML = "The objects properties are: " + text;
      </script>  

    </div>

    <div class="side-b">
        <h1>Looping Through an Array</h1>
        <p>You can access array values by using a <span>for in </span>loop</p>
        <code>
            let text = "";<br>
            for (let i in myObj.cars) { <br>
              text += myObj.cars[i] + ", "; <br>
            } 
        </code>

        <p>You can also access array values by using a <span>for loop </span></p>
        <code>
const myJSON = '{"name":"John", "age":30, "cars":["Ford", "BMW", "Fiat"]}'; <br>
const myObj = JSON.parse(myJSON); <br>

let text = ""; <br>
for (let i = 0; i < myObj.cars.length; i++) { <br>
  text += myObj.cars[i] + ", "; <br>
} <br>
        </code>
    </div>

</div>    

<a href="json-server.php" class="next">NEXT</a>
</body>
</html>