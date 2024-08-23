<?php

// Writing PHP
echo "Hello, World!"; // Output: Hello, World!
echo "\n"; // New line

// Reading PHP
$fname = readline("Enter your first name: ");
$lname = readline("Enter your last name: ");
echo "My name is " . $fname . " " . $lname; // Output: My name is John Doe
echo "\n"; // New line

// Data Types
$string = "Hello";
$integer = 10;
$float = 3.14;
$boolean = true;
$array = [1, 2, 3];
$null = null;

// Constants
define("PI", 3.14159);
echo PI; // Output: 3.14159
echo "\n"; // New line

// Operators
$a = 10;
$b = 5;

// Arithmetic Operators
$sum = $a + $b; // Addition
$difference = $a - $b; // Subtraction
$product = $a * $b; // Multiplication
$quotient = $a / $b; // Division
$remainder = $a % $b; // Modulus

// Assignment Operators
$c = $a; // Assign value of $a to $c
$c += $a; // Equivalent to $c = $c + $a
$c -= $a; // Equivalent to $c = $c - $a
$c *= $a; // Equivalent to $c = $c * $a
$c /= $a; // Equivalent to $c = $c / $a
$c %= $a; // Equivalent to $c = $c % $a

// Comparison Operators
$result = ($a == $b); // Equal to
$result = ($a != $b); // Not equal to
$result = ($a > $b); // Greater than
$result = ($a < $b); // Less than
$result = ($a >= $b); // Greater than or equal to
$result = ($a <= $b); // Less than or equal to

// Logical Operators
$result = ($a && $b); // Logical AND
$result = ($a || $b); // Logical OR
$result = !$a; // Logical NOT

?>