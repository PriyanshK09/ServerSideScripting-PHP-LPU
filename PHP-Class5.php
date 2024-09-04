$color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
the words 'red', 'green' and 'white' should come from $color[2], $color[1], $color[0] respectively.

<?php
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $color[2] . " carpet, the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

$newcolor = array('green', 'red', 'white');

echo "<ul>";
foreach ($newcolor as $color) {
    echo "<li>" . $color . "</li>";
}
echo "</ul>";
?>