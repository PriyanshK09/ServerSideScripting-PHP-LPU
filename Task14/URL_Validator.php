<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validator</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url">
        <input type="submit" value="Validate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = $_POST["url"];
        
        // Sanitize URL
        $sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
        
        // Validate URL
        if (filter_var($sanitized_url, FILTER_VALIDATE_URL)) {
            echo "The URL is valid: " . $sanitized_url;
        } else {
            echo "The URL is not valid.";
        }
    }
    ?>
</body>
</html>