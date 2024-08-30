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