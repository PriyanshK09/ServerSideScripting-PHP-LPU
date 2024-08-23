<!-- Create a PHP script that calculates and displays the result of a more complex arithematic expression : 
 (a+b)*c/d-e.
 Use variables for the values of a, b, c, d, and e -->

<?php
$a = readline("Enter the value of a: ");
$b = readline("Enter the value of b: ");
$c = readline("Enter the value of c: ");
$d = readline("Enter the value of d: ");
$e = readline("Enter the value of e: ");

$result = ($a + $b) * $c / $d - $e;

echo "The result is: " . $result;
?>
