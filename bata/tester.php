<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to the my tester sample </h2>
    <p>Good to see you</p>
    <?php
        $str = "This is Code form php ";
        echo " $str.";
    ?>

    <h3>This is from code but imported from <?php echo "$str" ?> before the way </h3>

    <?php echo "<h4> This is from inside echo </h4>"; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name = "fname">
    <input type = "submit">
</form>

<?
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['fname'];

        if (empty($str)){ 
            ?>
            <p class="noma"> <?php echo "The field is empty"; ?></p>
            <?php 
    }
        else {
        ?>
        <h1 class="noma">
            <?php echo $str ?>
        </h1>
<?php
        }
    }
?>

<style>
    h1 {
        font-size: 70px;
    }

    .noma {
        border: 1px solid red;
        background-image: -moz-linear-gradient(to right, #a1ffd9, #f3ff77);
    }


</style>

</body>
</html>