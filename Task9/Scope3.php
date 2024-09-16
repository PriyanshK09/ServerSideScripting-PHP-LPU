<!-- Create a funciton with name Outer which contains a local variable (any variable with some message), 
 and inside this function define inner function that tries to access and modifies the value of variable -->
<!-- Display the value of variable from both functions -->

<?php
function Outer() {
    $a = "This is Outer Function";

    function Inner() {
        global $a;
        $a = "This is Inner Function";
        echo $a;
        echo "\n";
    }

    Inner();

    echo $a;
    echo "\n";
}

Outer();
?>