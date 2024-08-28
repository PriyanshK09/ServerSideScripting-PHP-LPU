<!-- Create a PHP Script that validates a date given as 3 integers:
day, month, and year. The script should ensure the following:
- The month is between 1 and 12.
- The day is valid for the given month. (consider leap years)
- The year is positive.
Display weather the date is valid or not. -->

<?php
$day = readline("Enter the day: ");
$month = readline("Enter the month: ");
$year = readline("Enter the year: ");
$valid = true;

if ($year < 0) {
    $valid = false;
} else {
    if ($month < 1 || $month > 12) {
        $valid = false;
    } else {
        if ($month == 2) {
            if ($year % 4 == 0) {
                if ($day < 1 || $day > 29) {
                    $valid = false;
                }
            } else {
                if ($day < 1 || $day > 28) {
                    $valid = false;
                }
            }
        } else {
            if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
                if ($day < 1 || $day > 30) {
                    $valid = false;
                }
            } else {
                if ($day < 1 || $day > 31) {
                    $valid = false;
                }
            }
        }
    }              
}

if ($valid) {
    echo "The given date, $day/$month/$year, is valid. \n";
} else {
    echo "The date is not valid. \n";
}