<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Global Variable</title>
</head>
<body>
<h1>Predefined Variables</h1>
<p>PHP pre-defined variable is super global variable:</p> <hr>
<ul>
    <li><b>$_SERVER</b></li>
    <li><b>$_REQUEST</b></li>
    <li><b>$_POST</b></li>
    <li><b>$_GET</b></li>
    <li><b>$_FILES</b></li>
    <li><b>$_ENV</b></li>
    <li><b>$_COOKIE</b></li>
    <li><b>$_SESSION</b></li>
    <li><b>$GLOBALS</b></li>
</ul> 
<hr>

<h2>$_SERVER</h2>
<p>An array that includes information such as headers, paths and script locations. </p>

<div>
Array Values: 
['SCRIPT_NAME','HTTP_HOST','HTTP_USER_AGENT','SERVER_SOFTWARE']
</div>

<pre>
    foreach ($_SERVER as $key => $value){
        echo $key. ":" . $value. "br";
    }
</pre>

<h2>$_POST & $_GET</h2>
<p>The purpose of the PHP superglobals $_GET and $_POST is to collect data that has been entered into a form</p>
<p>The html element <span>form</span> is needed inorder to use $_POST & $_GET</p>
<p><span>$_POST: </span>are superglobal array holds key/value pairs. <span>Keys are the <span>names</span>of the form control and values are the <span>input data</span> entered by the user.</span></p>
<p>This is <b class="fun">function()</b> sample of block code</p>
</body>
</html>