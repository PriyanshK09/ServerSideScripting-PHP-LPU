<!-- SUM of 10 Natural Numbers using Do-While Loop -->

<?php
$counter = 1;
$sum = 0;

do {
    $sum += $counter;
    $counter++;
} while ($counter <= 10);

echo "The sum of the first 10 natural numbers is: " . $sum;
?>