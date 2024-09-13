<!-- String Manipulation -->
<!-- Write a function addSuffix($string) that appends a fixed suffix, say "_done",
     to the string passed by value. Show how the string outside the function remains unmodified. -->
<!-- Challenge : Use different strings as inputs and explain the behaviour of pass by value in each case -->

<?php
function addSuffix($string) {
    $string = $string . "_done";
    return $string;
}

$str1 = "Hello";
$str2 = "World";

echo "Original strings:\n";
echo "str1: $str1\n";
echo "str2: $str2\n";

echo "Strings after adding suffix:\n";
echo "str1: " . addSuffix($str1) . "\n";
echo "str2: " . addSuffix($str2) . "\n";

echo "Original strings after function call:\n";
echo "str1: $str1\n";
echo "str2: $str2\n";
?>

<!-- Output:
Original strings:
str1: Hello
str2: World
Strings after adding suffix:
str1: Hello_done
str2: World_done
Original strings after function call:
str1: Hello
str2: World
-->