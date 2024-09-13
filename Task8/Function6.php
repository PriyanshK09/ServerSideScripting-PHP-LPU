<!-- Create a function convertToFarhenheit($celsius), Pass Temp by Reference -->

<?php
function convertToFarhenheit(&$celsius) {
    $celsius = ($celsius * 9/5) + 32;
}

$temp = 25;
echo "Temperature in Celsius: $temp\n";

convertToFarhenheit($temp);
echo "Temperature in Farhenheit: $temp\n";
?>