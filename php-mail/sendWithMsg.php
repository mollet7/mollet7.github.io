<?php
$to = "maulid.hamad@pil.co.tz";
$subject = "Email from PHP Include";

//start of message
ob_start();
?>

<h1>Hello!</h1>
<p>This is a message sent from a PHP script.</p>
<p>The current date and time is: <?php echo date('Y-m-d H:i:s'); ?></p>

<?php
$message = ob_get_clean();

$headers = "From: mollet7@live.com" . "\r\n" .
    "CC: cc@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>



<!-- The ob_start() and ob_get_clean() functions are used to start and end output buffering, 
which allows you to use the echo statement to add content to the message.
 -->