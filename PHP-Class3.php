<?php

// Example of if-else statement
$age = 25;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}

// Example of switch statement
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    default:
        echo "Today is not a weekday.";
}

// Example of for loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

// Example of while loop
$num = 1;

while ($num <= 5) {
    echo $num . " ";
    $num++;
}

// Example of do-while loop
$num = 1;

do {
    echo $num . " ";
    $num++;
} while ($num <= 5);

?>