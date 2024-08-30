<!-- Write a PHP Script that finds the Greatest Common Divisor (GCD) of two numbers 
using while loop. -->

<?php
$firstNumber = readline("Enter the first number: ");
$secondNumber = readline("Enter the second number: ");

// how to find the GCD of two numbers
// 1. Find the smaller number
// 2. Divide the larger number by the smaller number
// 3. If the remainder is 0, then the smaller number is the GCD
// 4. If the remainder is not 0, then the smaller number becomes the larger number and the remainder becomes the smaller number
// 5. Repeat the process until the remainder is 0

if ($firstNumber > $secondNumber) {
    $smallerNumber = $secondNumber;
    $largerNumber = $firstNumber;
} else {
    $smallerNumber = $firstNumber;
    $largerNumber = $secondNumber;
}

while ($largerNumber % $smallerNumber != 0) {
    $remainder = $largerNumber % $smallerNumber;
    $largerNumber = $smallerNumber;
    $smallerNumber = $remainder;
}

echo "The Greatest Common Divisor of $firstNumber and $secondNumber is: $smallerNumber\n";
?>