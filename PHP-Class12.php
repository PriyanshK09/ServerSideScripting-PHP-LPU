<?php
$name = $email = $website = $comment = $gender = "";
$errors = [];
$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $website = sanitize_input($_POST["website"]);
    $comment = sanitize_input($_POST["comment"]);
    $gender = sanitize_input($_POST["gender"]);

    $errors = validate_input($name, $email, $website, $gender);

    if (empty($errors)) {
        $output = "Name: $name<br>Email: $email<br>Website: $website<br>Gender: $gender";
    }
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function validate_input($name, $email, $website, $gender) {
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($website) || !filter_var($website, FILTER_VALIDATE_URL)) {
        $errors[] = "Valid website URL is required";
    }
    
    if (empty($gender)) {
        $errors[] = "Gender is required";
    }

    return $errors;
}

include 'PHP-Class12.html';
?>
