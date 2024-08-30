<!-- Create a PHP script to reverse the order of digits in 12345 -->

<?php
$number = 12345;
$reversedNumber = 0;

while ($number > 0) {
    $reversedNumber = $reversedNumber * 10 + $number % 10;
    $number = (int)($number / 10);
}

echo "Reversed number of 12345 is: $reversedNumber\n";
?>

<!-- Output:
    1st loop - $reversedNumber = 0 * 10 + 12345 % 10 = 5
    2nd loop - $reversedNumber = 5 * 10 + 1234 % 10 = 54
    3rd loop - $reversedNumber = 54 * 10 + 123 % 10 = 543
    4th loop - $reversedNumber = 543 * 10 + 12 % 10 = 5432
    5th loop - $reversedNumber = 5432 * 10 + 1 % 10 = 54321
-->