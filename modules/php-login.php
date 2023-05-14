<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login Form </title>
</head>
<body>
    <h1>How it made!</h1> <hr>
    <div class="html">
    <ul> <h2>HTML part: Basic</h2>
       <li>Create label for the first field say <b>username</b></li>
       <li>Create its corresponding <b>input</b> with its <b>type</b> optional you can include others inputs attributes</li>
       <li>Create another label and input field as your form required. </li>
       <li>Create <b>button</b> with type <b>submit</b>and call it whatever you want linke <b>login</b></li>
    </ul>
</div>
<div class="css">
    <ul><h2>CSS Part</h2>
        <li>Style your login box as you want</li>
        <li>style <b>inputs</b>, <b>buttons</b></li>
        

    </ul>
</div>
<div class="js">
    <ul><h2>JS part</h2>
        
    </ul>
</div>

<div class="php-script">
    <ul><h2>php script part</h2>
      <p>This will use php script that will connect to database.</p>
      <li>Create logic that connect to database.</li>
      <li>Create the logic that check for connection error.</li>
      <li>Create logic to check if forms has been submitted :-
        <ul>
            <li>Get username and password from form.</li>
            <li>Query database for user with matching credentials.</li>
            <li><b>Check:</b>
            <ul>
                <li>Authentication successfull: Say massage</li>
                <li>Forward to another page <span>header("Location: home.php");</span></li>
                <li>Else failed: Say message!</li>
            </ul>
        </li>
        </ul>
      </li>
    </ul>
</div>

<div class="database">
    <ul><h2>Database Part</h2>
      <p>This will use php script and mysql database</p>
      <li>Create database </li>
      <li>create table name <b>users</b>with fields-:
        <ul>
            <li>username</li>
            <li>password</li>
        </ul>
    </li>

        
    </ul>
</div>
    <h2>Test Me</h2>

    <div class="contact-form">
       <form action="action_page.php" method="post">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
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
    b {
        background-color: green;
        font-weight: bolder;
    }
    .database {
        border: 2px solid green;
    }
    .php-script {
        border: 2px solid green;
    }
    /* Login form CSS */

    .contact-form {
    margin: 0 500px 0 500px;
}


form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
}

.cancelbtn {
    width: 100%;
    }

}

</style>


