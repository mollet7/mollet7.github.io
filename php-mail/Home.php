

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // simple mail
    $msg = "First line of text\nSecond line of text";

    //use wordwrap() if lines re longer than 70 characters
    $msg = wordwrap($msg, 70);

    // send email

    mail("maulid.hamad@pil.co.tz","TEST", $msg);
    // syntax:
    // mail (to, subject, message, headers, parameters);

    echo "<h1>Email is sent!</h1>"

    ?>
</body>
</html>