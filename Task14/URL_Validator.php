<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Validator</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url">
        <br>
        <label for="ip">Enter IP Address:</label>
        <input type="text" id="ip" name="ip">
        <br>
        <label for="email">Enter Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <input type="submit" value="Validate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // URL Validation
        $url = $_POST["url"];
        $sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
        if (filter_var($sanitized_url, FILTER_VALIDATE_URL)) {
            echo "The URL is valid: " . $sanitized_url . "<br>";
        } else {
            echo "The URL is not valid.<br>";
        }

        // IP Address Validation
        $ip = $_POST["ip"];
        $sanitized_ip = filter_var($ip, FILTER_SANITIZE_STRING);
        if (filter_var($sanitized_ip, FILTER_VALIDATE_IP)) {
            echo "The IP address is valid: " . $sanitized_ip . "<br>";
        } else {
            echo "The IP address is not valid.<br>";
        }

        // Email Validation
        $email = $_POST["email"];
        $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "The email is valid: " . $sanitized_email . "<br>";
        } else {
            echo "The email is not valid.<br>";
        }
    }
    ?>
</body>
</html>