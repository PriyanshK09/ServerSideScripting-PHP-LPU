<?php

$string = "PHP is the web scripting language of 522 choice. 825";

$exp = preg_match_all("/[wo]/i", $string, $array);

if ($exp) {
    echo "The number of words in the string are: " . count($array[0]);
} else {
    echo "No match found";
}

echo "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";

?>