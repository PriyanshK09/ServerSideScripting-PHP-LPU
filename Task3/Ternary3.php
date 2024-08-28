<!-- use multiple ternary operator and write code for printing the grade according to the marks in $marks using readline -->

<?php
$marks = readline("Enter the marks: ");

$grade = $marks >= 90 ? 'A+' : ($marks >= 80 ? 'A' : ($marks >= 70 ? 'B' : ($marks >= 60 ? 'C' : ($marks >= 50 ? 'D' : 'F'))));

echo "Grade: " . $grade;