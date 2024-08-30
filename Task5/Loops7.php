<!-- Create a PHP Script that generates a multiplcation table for numbers from 1 to 10
in proper formatting :
    1 2 3 4 5 6 7 8 9 10
    2 4 6 8 10 12 14 16 18 20
    so on -->

<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j . " ";
    }
    echo "\n";
}
?>