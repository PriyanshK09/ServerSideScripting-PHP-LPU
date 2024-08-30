<!-- Write a PHP script to find sum of digits in 12345 -->

<?php
$number = 12345;
$sum = 0;

while ($number > 0) {
    $sum += $number % 10;
    $number = (int)($number / 10);
}

echo "Sum of digits in 12345 is: $sum\n";
?>