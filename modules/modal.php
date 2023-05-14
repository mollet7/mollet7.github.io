<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal </title>
</head>
<body>
    <h1>How it made!</h1> <hr>
    <div class="html">
    <ul> <h2>HTML part</h2>
        <li>Create an <span>element tag</span>  you want to apply modal with unique id: example Button <span>id="btn1"</span>  </li>
        <li>Create an <span>div tag</span>with unique id that will open the modal contents exp: <span>div id="mymodal"</span>  </li>
        <li>Create <span>modal contents (DIV)</span> division:-
            <ul>
                <li>Keep close sign &times; in the contents</li> 
                <li>Model contents</li> 
            </ul>
        </li>
    </ul>
</div>
<div class="css">
    <ul><h2>CSS Part</h2>
        <li>make .modal class display <span>none</span> by default</li>
        <li>make .modal <span>position: fixed</span> in order to stay in place</li>
        <li>Make <span>z-index: 1</span> to sit in place</li>
        <li>Adjust the modal position</li>
        <li>Style the modal-contents class as you want</li>
        <li>style the close button as you want and <span>float: right</span></li>
        <li>style close to hover: close:focus to your style</li>

    </ul>
</div>
<div class="js">
    <ul><h2>JS part</h2>
        <li>Get the modal by reffrecing its id <span>mymodal</span></li>
        <li>Get the button that opens the modal by reffrecing its id <span>btn1</span> </li>
        <li>Get the <span>span</span> element that closes the modal</li>
        <li>Action: When user <span>clicks </span> the button, open the modal. so change the style to display block</li>
        <li>Action: When the user <span> clicks </span> anywhere outside of the modal, close it</li>
    </ul>
</div>
    <h2>Test Me</h2>
    <button id="btn1">Open Modal</button>
    <div id="modal" class="modal">
        <div class="modal-contents">
            <span id="spn1" class="close">&times;</span>                       
            <p>Here are contents inside the modal....</p>
        </div>
    </div>
</body>
</html>
<style>
    span {
        background-color: darkgoldenrod;
        color: white;
        font-weight: bolder;
        padding: 1px;
        
    }
    ul {
        padding: 10px;
    }

    ul li {
       padding: 5px; 
    }
    .html {
        border: 1px solid red;
    }
    .css {
        border: 1px solid blue;
    }

    .js {
        border: 1px solid green;
    }
    /* Modal CSS HERE */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 20% !important;
        top: 20% !important;
        width: 70%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
    }
    .modal-contents {
        background-color: #fff;
        margin: auto;
        padding: 20px;
        max-width: 100%;
        border: 1px solid yellow;

        
    }
    .close {
        background-color: black;
        float: right;
    }
    .close:hover,.close:focus{
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    var modal = document.getElementById("modal");
    var btn1 = document.getElementById("btn1");
    var span =  document.getElementById("spn1")

    btn1.onclick = function() {
        modal.style.display = "block";
        document.body.style.backgroundColor = "grey";
    }

    span.onclick = function() {
        modal.style.display = "none";
        document.body.style.backgroundColor = "#fff";
    }

    window.onclick = function(event){
        if (event.target == modal){
            modal.style.display = "none";
            document.body.style.backgroundColor = "#fff";   
        }
        
    }

</script>