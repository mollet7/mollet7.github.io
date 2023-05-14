<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SESSION GLOBAL VARIABLE</h1> <hr>
    <p>Using <span>session</span> you can store information in variables, to be used across <span>multiple pages</span>.</p>
    <p>By default, session variables last until the user <span> closes the browser </span>.</p>
    <p>Session is started by using <b class="fun">session_start()</b>function</p>
    <p>And we using <b>PHP global Variable <span>$_SESSION['']</span> to set session variable</b></p>

    <h3>Example:</h3>
    <p>Set the session for the color is Red and name is Ahmad</p>
    <pre>
        session_start();
        $_SESSION['color'] = "red";
        $_SESSION['name'] = "Ahmad";
    </pre>
   <p> Now, the color and the name sesson variables are accessible on multiple pages, entire session.</p>

   <p class="note">The session_start() function must be the very first thing in your document. Before any HTML TAGS.</p>

<p>You can access the defined session variables by calling it in others pages <span> php $_SESSION['color']; ? </span></p>

<p class="note">To remove session varibles use <i class="fun">session_unset()</i>or using <i class="fun">session_destroy()</i></p>

More...
<p>Another way to show all the session variable values for a user session is to run the following <code>code:</code></p>

<pre>
    <code> print_r($_SESSION);</code> 
</pre> <hr>

<h3 class="note">How does it work? How does it know its me?</h3>
<p class="note">Most sessions set a user-key on the user's computer that looks something like this: <b>765487cf34ert8dede5a562e4f3a7e12</b>. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session. </p>

</body>
</html>