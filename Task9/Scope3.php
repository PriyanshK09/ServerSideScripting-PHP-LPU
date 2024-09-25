<!-- Create a funciton with name Outer which contains a local variable (any variable with some message), 
 and inside this function define inner function that tries to access and modifies the value of variable -->
<!-- Display the value of variable from both functions -->

<?php
function Outer() {
    $a = "This is Outer Function";

    function Inner() {
        $GLOBALS['a'] = "This is Inner Function";
        echo $GLOBALS['a'];
        echo "\n";
    }

    Inner();

    echo $GLOBALS['a'];
    echo "\n";
}

Outer();
?>