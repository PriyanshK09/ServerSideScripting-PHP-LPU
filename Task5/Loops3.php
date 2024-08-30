<!-- Write a PHP script to find factorial of a number using while loop -->

<?php
$number = readline("Enter a number: ");
$factorial = 1;
$i = 1;

while ($i <= $number) {
    $factorial *= $i;
    $i++;
}

echo "Factorial of $number is: $factorial\n";
?>
