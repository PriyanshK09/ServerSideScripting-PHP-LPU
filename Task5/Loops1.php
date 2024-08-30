<!-- Create a PHP Script that uses nested loops to generate the following pattern.
where the number of rows in determined by user :
1
22
333
4444
55555 -->

<?php
$rows = readline("Enter the number of rows: ");

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "\n";
}
?>