<!-- Library Fine Calculation -->
 <!-- A library imposes a fine for late book returns, The fine is calculated based on the number of days the book is overdue : -->
 <!-- - 1 to 5 days : 1$ per day -->
 <!-- - 6 to 10 days : 2$ per day -->
 <!-- - More than 10 days : 5$ per day -->
 <!-- Create a function calculateFine($daysLate) that calculates the total fine for a late return -->

<?php
function calculateFine($daysLate)
{
    if ($daysLate >= 1 && $daysLate <= 5) {
        return $daysLate * 1;
    } elseif ($daysLate >= 6 && $daysLate <= 10) {
        return $daysLate * 2;
    } elseif ($daysLate > 10) {
        return $daysLate * 5;
    } else {
        return 'Invalid Input';
    }
}

// User Input
$daysLate = readline('Enter the Number of Days Late: ');

$fine = calculateFine($daysLate);
echo "Fine for $daysLate days late is $fine\n";
?>