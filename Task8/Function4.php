<!-- Bill Splitting for Group Dinner -->
 <!-- You are developing a function for a restaurant to split the total bill among a group of diners. The function should take the total bill amount and the number of diners. -->
 <!-- and return how much each person should pay, rounded to two decimal places. Write a function splitBoll($totalAmount, $numOfDiners) to perform this task -->

<?php
function splitBill($totalAmount, $numOfDiners)
{
    return round($totalAmount / $numOfDiners, 2);
}

// User Input
$totalAmount = readline('Enter the Total Bill Amount: ');
$numOfDiners = readline('Enter the Number of Diners: ');

$amountPerPerson = splitBill($totalAmount, $numOfDiners);
echo "Each person should pay $amountPerPerson\n";
?>