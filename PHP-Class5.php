<!-- $color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
the words 'red', 'green' and 'white' should come from $color[2], $color[1], $color[0] respectively. -->

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

<!-- Multidimensional Array -->
<?php
$result = array(
    "maths" => array(
        "student1" => 34,
        "student2" => 45,
        "student3" => 56
    ),
    "science" => array(
        "student1" => 67,
        "student2" => 78,
        "student3" => 89
    ),
    "english" => array(
        "student1" => 23,
        "student2" => 34,
        "student3" => 45
    )
);

echo "Marks for student1 in maths: " . $result['maths']['student1'] . "<br>";
echo "Marks for student2 in science: " . $result['science']['student2'] . "<br>";
echo "Marks for student3 in english: " . $result['english']['student3'] . "<br>";

echo "<pre>";
print_r($result);
echo "</pre>";
?>