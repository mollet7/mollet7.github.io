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
        .note {
            background-color: yellow;
            color: red;
            font-weight: bolder;
            padding: 3px,
        }
    </style>
</head>
<body>
    <h1>JSON PHP <span>DATABASE</span></h1>
    <p>Imagine you have a database on your server, and you want to send a request to it from the client where you ask for the 10 first rows in a table called "customers".</p>

    <p>On the client, make a JSON object that describes the numbers of rows you want to return.</p>
    <p>Before you send the request to the server, convert the JSON object into a string and send it as a parameter to the url of the PHP page:</p>
    <h3>Example</h3>
    <div class="side-a">
      <h4>Client side, request data from server!</h4>  
      <script>
        const dbParam = JSON.stringify({"limit":5});

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
        document.getElementById("result").innerHTML = this.responseText;
        myObj = JSON.parse(this.responseText);
        let text = "";
        for (let x in myObj){
            text += myObj[x].name + "<br>";
        }
        document.getElementById("result2").innerHTML = text;
        }
        xmlhttp.open("GET", "json_demo_db.php?x=" + dbParam);
        xmlhttp.send();
</script>
<code>
const dbParam = JSON.stringify({"limit":10});<br>

const xmlhttp = new XMLHttpRequest();<br>
xmlhttp.onload = function() {<br>
document.getElementById("result").innerHTML = this.responseText;<br>
} <br>
xmlhttp.open("GET", "json_demo_db.php?x=" + dbParam); <br>
xmlhttp.send(); <br>
</code>
<p>Result</p>
<h4 id="result"></h4>
<h5>Result in format</h5>
<h6 id="result2"></h6>
    </div>

<hr>
<h2>PHP method = POST</h2>
<p>When sending data to the server, it is often best to use the HTTP POST method.</p>
<p>To send AJAX requests using the POST method, specify the method, and the correct header.</p>
<p>The data sent to the server must now be an argument to the send() method:</p>
<script>
    const dbParam = JSON.stringify({"limit":10});
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
    myObj = JSON.parse(this.responseText);
    let text = "";
    for (let x in myObj) {
        text += myObj[x].name + "<br>";
    }
    document.getElementById("result3").innerHTML = text;
    }
    xmlhttp.open("POST", "json_demo_db_post.php");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>
<h6 id="result3"></h6>

<h3 class="note">The only difference in the PHP file is the <span>method</span> for getting the transferred data.</h3>


<a href="json_html.php" class="next">NEXT</a>

    
</body>
</html>