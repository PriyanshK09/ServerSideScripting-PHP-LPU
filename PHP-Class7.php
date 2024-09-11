<!-- Multidimensional Array -->

<?php
$result = array(
    array("Manoj", 7.8, "Pass"),
    array("Rahul", 8.0, "Pass"),
    array("Raj", 6.5, "Fail"),
    array("Ravi", 5.5, "Fail")
);

echo "<pre>";
print_r($result);
echo "</pre>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Percentage</th>";
echo "<th>Status</th>";
echo "</tr>";

foreach ($result as $value) {
    echo "<tr>";
    foreach ($value as $val) {
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<!-- Multidimensional Associative Array storing Student Data -->
<?php
$student = [
    "John" => [
        "Maths" => 80,
        "Science" => 70,
        "English" => 85
    ],
    "Smith" => [
        "Maths" => 75,
        "Science" => 80,
        "English" => 85
    ],
    "David" => [
        "Maths" => 90,
        "Science" => 85,
        "English" => 90
    ]
];
?>

<!-- Function -->

<?php
function fullName($fname="Priyansh", $lname="Khare")
{
    echo "Full Name: $fname $lname";
}