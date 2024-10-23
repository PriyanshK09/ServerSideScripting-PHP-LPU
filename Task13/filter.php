<?php
// Sanitize String
$str = "<h1>Hello, World!</h1>";
// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
if(filter_var($newstr, FILTER_VALIDATE_STRING)){
    echo "String is valid";
} else {
    echo "String is not valid";
}

echo $newstr;
echo "<br>";
?>