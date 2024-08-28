<?php

$username = isset($username) && $username != null ? $username : "Guest User";
$message = "Welcome " . ($username != "Guest User" ? $username : "Username");

echo $message;

?>
