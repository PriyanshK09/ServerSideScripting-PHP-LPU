<!-- Write a PHP Script that finds the Greatest Common Divisor (GCD) of two numbers 
using while loop. -->

<?php
$firstNumber = readline("Enter the first number: ");
$secondNumber = readline("Enter the second number: ");

while ($firstNumber != $secondNumber) {
    if ($firstNumber > $secondNumber) {
        $firstNumber -= $secondNumber;
    } else {
        $secondNumber -= $firstNumber;
    }
}

echo "The Greatest Common Divisor is: " . $firstNumber;
?>