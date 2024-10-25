<?php
$to = "priyanshkhare4905@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "priyanshkhare0908@gmail.com";
$headers = "From: $from";
$exp = mail($to, $subject, $message, $headers);
echo "Mail sent";
?>