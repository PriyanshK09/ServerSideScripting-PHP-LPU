<!-- Array Manipulation and Filtering -->
<!-- Create a PHP Script that takes an indexed array of integers. Your task is to :
1. Filter out all the even numbers from the array.
2. Square the remaining odd numbers.
3. Sort the squared numbers in descending order.
4. Return the new array and calculate the sum of its elements.
$numbers = [3, 7, 2, 8, 1, 4, 10, 5];
Expected Output :
[49, 25, 9, 1] and the sum is 84 -->

<?php
// Define an array of numbers
$numbers = [3, 7, 2, 8, 1, 4, 10, 5];

// Filter the array to get only odd numbers
$oddNumbers = array_filter($numbers, function($number) {
    return $number % 2 !== 0;
});

// Square each odd number
$squaredOddNumbers = array_map(function($number) {
    return $number * $number;
}, $oddNumbers);

// Sort the squared numbers in descending order
rsort($squaredOddNumbers);

// Calculate the sum of the squared numbers
$sumOfSquares = array_sum($squaredOddNumbers);

// Create a string to display the squared numbers
$squaredNumbersString = '[';
foreach ($squaredOddNumbers as $index => $number) {
    $squaredNumbersString .= $number;
    if ($index < count($squaredOddNumbers) - 1) {
        $squaredNumbersString .= ', ';
    }
}
$squaredNumbersString .= ']';

// Print the sorted squared numbers and their sum
echo $squaredNumbersString . ' and the sum is ' . $sumOfSquares;
?>