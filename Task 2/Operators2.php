<!-- Create a PHP script that demonstrates the use of compound assignment operators (+=, -=, *=, %=).
 Start with a number and apply each operator, displaying the result after each operation -->

<?php
$a = readline("Enter the value of a: ");
$b = readline("Enter the value of b: ");

$a += $b;
echo "After += operator: " . $a . "\n";

$a -= $b;
echo "After -= operator: " . $a . "\n";

$a *= $b;
echo "After *= operator: " . $a . "\n";

$a %= $b;
echo "After %= operator: " . $a . "\n";

?>