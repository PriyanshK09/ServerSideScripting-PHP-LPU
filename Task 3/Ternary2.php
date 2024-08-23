<!-- Create a PHP script that checks if a person is eligible to vote based on their nationality and age using ternary operator.
 Assume the voting age is 18 or older, nationality must be India -->

<?php

$age = readline("Enter your age : ");
$nationality = readline("Your Nationality (India, Pakistan, Bangladesh, etc) : ");

$eligible = ($age >= 18 && $nationality === 'India') ? 'Eligible to vote' : 'Not eligible to vote';

echo $eligible;

?>