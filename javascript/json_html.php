<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON | HTML</title>
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
  <h1>JSON HTML</h1>
  <p>JSON can very easily be <span>translated into Javascript </span></p>
  <p>Javascript can be used to make <span>HTML</span> IN YOUR WEB PAGES</p>

  <div class="container">
    <div class="side-a">
        <h2>HTML Table</h2>
        <p>Make an HTML table with data received as JSON:</p>
        <p id="result"></p>
    <script>
        const dbParam = JSON.stringify({table:"employees",limit:20});
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            const myObj = JSON.parse(this.responseText);
           let text = "<table border='1'>"
            for (let x in myObj) {
                text += "<tr><td>" + myObj[x].name + "</td></tr>";
            }
            text += "</table>"    
            document.getElementById("result").innerHTML = text;
        }
        xmlhttp.open("POST", "json_demo_html_table.php");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("x=" + dbParam);
    </script>
    </div>

    <div class="side-b">
        <h2>Dynamic HTML Table</h2>
        <select id="myselect" onchange="change_myselect(this.value)">
            <option value="">Choose an option:</option>
            <option value="employees">Employees</option>
            <option value="users">Users</option>
          </select> 
          <p id="result2"></p>
          <script>
            function change_myselect(sel){
                const dbParam = JSON.stringify({table:sel,limit:10});
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function(){
                    myObj2 = JSON.parse(this.responseText);
                    text = "<table border = '1'>"
                        for (x in myObj2){
                            text += "<tr><td>" + myObj2[x].name + "</td></tr>";
                        }
                        text += "</table>"
                        document.getElementById("result2").innerHTML = text;
                }
               xmlhttp.open("POST", "json_demo_html_table.php", true);
               xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               xmlhttp.send("x="+ dbParam); 
            }
          </script>
    </div>
  </div>
  <h1>HTML Drop Down List</h1>
  <p>Make an HTML drop down list with data receved as JSON</p>
  <h3 id="result3"></h3>
  <script>
    const dbParam1 = JSON.stringify({table:"users",limit:20});
    const xmlhttp1 = new XMLHttpRequest();
    xmlhttp1.onload = function() {
        const myObj3 = JSON.parse(this.responseText);
        let text = "<select>"
        for (let x in myObj3) {
            text += "<option>" + myObj3[x].username + "</option>";
     }
    text += "</select>"
    document.getElementById("result3").innerHTML = text;
    }
    xmlhttp1.open("POST", "json_demo_html_table_1.php", true);
    xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp1.send("x=" + dbParam1);
    



  </script>

</body>
</html>