<!-- Write a PHP script to find sum of ten natural numbers using for loop -->

<?php
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "Sum of first 10 natural numbers is: $sum\n";
?>