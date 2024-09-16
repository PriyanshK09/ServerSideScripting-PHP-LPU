<!-- GLOBAL Scope -->
<!-- Program to Add TWO Numbers -->
<!-- using $SUM = $GLOBALS['a'] + $GLOBALS['b']; --> 

<?php
$a = 10;
$b = 20;

function sum() {
    $SUM = $GLOBALS['a'] + $GLOBALS['b'];
    echo $SUM;
    echo "\n";
}

sum();
?>