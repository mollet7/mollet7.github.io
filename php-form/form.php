<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="s.css">
    <title>Document</title>
</head>
<body>
    <div class="one">
        <form method="POST" action="<?php  echo $_SERVER["PHP_SELF"];  ?>">
        <h4>Fill the details</h4>
            Name: <input type="text" class="form-control" name="name">
            <span class="error">* <?php echo $nameErr; ?></span><br><br>
            E-mail: <input type="text" class="form-control" name="email">
            <span class="error">* <?php echo $emailErr; ?></span><br><br>
            Website: <input type="text" class="form-control" name="website">
            <span class="error">* <?php echo $websiteErr; ?></span><br><br>
            comment: <textarea name="comment" id="comment" cols="30" rows="3"></textarea>
            Gender: <input type="radio" name="gender" value="female"> Female 
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="other"> Other </br>
                    <span class="error">* <?php echo $ganderErr; ?></span><br><br>
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </form>

    </div>
<?php 

// define variBLE AND SET the empty values
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
   if (empty($_POST["email"])){
        $emailErr = "Email is required";
   } else {
        $email = test_input($_POST["email"]);
   }

   if (empty($_POST["website"])){
        $website = "";
   } else {
        $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])){
    $comment = "";
   } else {
    $comment = test_input($_POST["comment"]);
   }
    
   if (empty ($_POST["gender"])) {
    $genderErr = "Gender is required";
   } else {
    $gender = test_input ($_POST["gender"]);
   }
}


// function that sanitarize data 
function test_input ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h1>Your name is: <?php echo $name; ?></h1>
<p>Your email is: <?php echo $email; ?></p>
<h3>Websyte is : <?php echo $website; ?></h3>
<p>Your sex is: <?php echo $gender; ?> </p>
<p>Yuor message are: <?php echo $comment; ?> </p>



<?php 
    if ($gender === "female"){
        $post_gender = "Your beutiful";
    } elseif ($gender === "male"){
        $post_gender = "HandSome";
    } else {
        $post_gender = "Appriciate";
    }
?>
    <h3>Welcome : <?php echo $post_gender; ?></h3>




</div>   
  
</body>
</html>