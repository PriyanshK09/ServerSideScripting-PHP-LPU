<!-- OOPs Concepts in PHP -->
<?php 
class Student {
    public $name;
    public $age;
    public $course;

    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $student = new Student($name, $age, $course);
    $student->displayDetails();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Course: <input type="text" name="course" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>