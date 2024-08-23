<!-- Greatest of 3 Numbers -->

<?php
$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");
$c = readline("Enter the third number: ");

$greatest = $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);

echo "The greatest number is: " . $greatest;