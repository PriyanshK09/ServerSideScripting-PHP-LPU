<!-- Create a PHP Script that processes an associative array of students and their scores.
The script should calculate and display the average score of the students.
and then list all the students who scored above the average. -->

<?php
$students = array(
    "John" => 80,
    "Alice" => 85,
    "Bob" => 54,
    "Charlie" => 92,
    "Eve" => 88,
    "Frank" => 76,
    "Grace" => 73,
    "Hank" => 69
);

$sum = 0;
foreach ($students as $student => $score) {
    $sum += $score;
}
$average = $sum / count($students);
echo "The average score is: " . $average . "<br>";

echo "The students who scored above the average are: <br>";
foreach ($students as $student => $score) {
    if ($score > $average) {
        echo $student . "<br>";
    }
}
?>