<!-- Create a PHP script that calculates the tax based on income and age.
The tax rules are as follows:
- If the income is less than 10000, not tax is applied
- If the income is between 10000 and 20000:
    - If the person is under 65, apply a 10% tax
    - If the person is 65 or older, apply a 5% tax
- If the income is above 20000:
    - If the person is under 65, apply a 20% tax
    - If the person is 65 or older, apply a 15% tax
Display the amount of tax that needs to be paid. -->

<?php
$income = readline("Enter your income: ");
$age = readline("Enter your age: ");

if ($income < 10000) {
    echo "No tax is applied";
} elseif ($income >= 10000 && $income <= 20000) {
    if ($age < 65) {
        echo "10% tax is applied";
    } else {
        echo "5% tax is applied";
    }
} else {
    if ($age < 65) {
        echo "20% tax is applied";
    } else {
        echo "15% tax is applied";
    }
}

echo "\n";
?>