<!-- The while statement will loop through a block of code as long as the specified condition is true. -->

<?php
$counter = 0;

while ($counter < 10) {
    echo "The counter value is: " . $counter . "<br>";
    $counter++;
}
?>

<!-- The do...while statement will execute a block of code once, before checking if the condition is true, then it will repeat the loop as long as the condition is true. -->

<?php
$counter = 0;

do {
    echo "The counter value is: " . $counter . "<br>";
    $counter++;
} while ($counter < 10);
?>

<!-- While vs Do While -->
<!-- The main difference between the while and do...while loops is that 
     the while loop will check the condition before executing the block of code,
     while the do...while loop will execute the block of code once before checking the condition. -->


<!-- The for statement is used when you know in advance how many times the script should run. -->

<?php
for ($counter = 0; $counter < 10; $counter++) {
    echo "The counter value is: " . $counter . "<br>";
}
?>

<!-- The foreach statement is used to loop through arrays. -->

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color) {
    echo $color . "<br>";
}
?>

<!-- Indexed Arrays -->
<!-- An indexed or numeric array stores each array element with a numeric index. -->

<?php
$ccourses = array("PHP", "Laravel", "NodeJS", "ReactJS");
echo "I am learning " . $ccourses[0] . " and " . $ccourses[1] . "<br>";
echo "I am already familiar with " . $ccourses[2] . " and " . $ccourses[3] . "<br>";
echo count($ccourses);
?>

<!-- Using For Each Loop with Array -->

<?php
$ccourses = array("PHP", "Laravel", "NodeJS", "ReactJS");

foreach ($ccourses as $course) {
    echo $course . "<br>";
}
?>

<!-- For Each ($a as $b=>$c) -->

<?php
$colors = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
foreach ($colors as $key => $value) {
    echo $key . " is " . $value . "\n";
    echo $key ,"=>", $value . "\n";
}