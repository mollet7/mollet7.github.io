<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMLHttpRequest POST</title>
<script>
function postComment() {
    // Creating the xmlhttpRequest object
    var request = new XMLHttpRequest();

    //Instantiaing the request object
    request.open("POST", "confirmation.php");

    //Definig event listener for readystatechange event
    request.onreadystatechange = function() {

        if(this.readyState === 4 && this.status === 200 ){
            document.getElementById("result").innerHTML = this.responseText;
        } 
    };

    // Retriview the form data
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Sending the request to the server
    request.send(formData);
}
</script>
</head>
<body>
   <form id="myForm">
    <label>Name: </label>
    <div><input type="text" name="name"></div> <br>
    <label>Comment</label>
    <div> <textarea name="comment" id="" cols="30" rows="10"></textarea></div>
    <p><button type="button" onclick="postComment()">Post Comment</button></p>
   </form> 
   <div id="result">
    <p>Content of the result DIV REPLACED</p>
   </div>

</body>
</html>