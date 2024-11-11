<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Create database
// $sql = "CREATE DATABASE myDatabase";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// Select the database
$conn->select_db("myDatabase");

// Create table
$sql = "CREATE TABLE myTable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table myTable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data
$sql = "INSERT INTO myTable (firstname, lastname, email)
VALUES ('Priyansh', 'Khare', 'priyanshkhare0908@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>

<h2>Insert New Record</h2>
<form action="" method="post">
    First name: <input type="text" name="firstname"><br>
    Last name: <input type="text" name="lastname"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="insert" value="Insert">
</form>

<h2>Update Record</h2>
<form action="" method="post">
    ID: <input type="text" name="id"><br>
    First name: <input type="text" name="firstname"><br>
    Last name: <input type="text" name="lastname"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="update" value="Update">
</form>

<h2>Delete Record</h2>
<form action="" method="post">
    ID: <input type="text" name="id"><br>
    <input type="submit" name="delete" value="Delete">
</form>

<h2>View Records</h2>
<form action="" method="post">
    <input type="submit" name="view" value="View All Records">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['insert'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "INSERT INTO myTable (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "UPDATE myTable SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM myTable WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['view'])) {
        $sql = "SELECT id, firstname, lastname, email, reg_date FROM myTable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration Date</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["reg_date"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}
?>

</body>
</html>