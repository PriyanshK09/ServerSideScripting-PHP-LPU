<!-- Create a PHP Script that stores students data in a Multidimensional Associative Array.
Each student has a name, a list of subjects, and grades for each subject.
The program should calculate the average grade for each student and display the student's name, 
their subjects with grades, and the overall average grade in a table format. -->

<?php
$student = [
    "John" => [
        "Maths" => 80,
        "Science" => 70,
        "English" => 85
    ],
    "Smith" => [
        "Maths" => 75,
        "Science" => 80,
        "English" => 85
    ],
    "David" => [
        "Maths" => 90,
        "Science" => 85,
        "English" => 90
    ]
];

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Subjects</th>";
echo "<th>Grades</th>";
echo "<th>Average</th>";
echo "</tr>";

foreach ($student as $name => $subjects) {
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>";
    foreach ($subjects as $subject => $grade) {
        echo "$subject<br>";
    }
    echo "</td>";
    echo "<td>";
    foreach ($subjects as $subject => $grade) {
        echo "$grade<br>";
    }
    echo "</td>";
    echo "<td>";
    $average = array_sum($subjects) / count($subjects);
    echo round($average, 2);
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>