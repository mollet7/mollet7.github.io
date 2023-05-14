<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMLhttpRequestGet</title>
</head>

    <script>
        function displayFullName() {
            // Creating xmlhttprequest Object
            var request = new XMLHttpRequest();

            // instantiating the request object
            request.open("GET", "greet.php?fname=Maulid&lname=Clark");

            // Defining event listener for readystatechange event
            request.onreadystatechange = function(){
                //Check if the request is completed and was successful
                if(this.readyState === 4 && this.status === 200){
                    // instert the response from server into an HTML element
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };
            // Sending the request to the server
            request.send();
        }
    </script>
<body>
    <div id="result">
        <p>Content of the DIV box will be replaced by server responses</p>
    </div>
    <button type="button" onclick="displayFullName()">Display Full Name</button>

</body>
</html>
