<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookie Example</title>
</head>
<body>

<?php
$cookie_name = "username";
$cookie_expiry = time() + (86400 * 30); // 86400 = 1 day, so this cookie will expire in 30 days

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['set_cookie'])) {
        // Setting a cookie
        $cookie_value = $_POST['username'];
        setcookie($cookie_name, $cookie_value, $cookie_expiry, "/"); // "/" means the cookie is available in the entire domain
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['delete_cookie'])) {
        // Deleting a cookie
        setcookie($cookie_name, "", time() - 3600, "/"); // Setting the cookie expiry time in the past to delete it
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

// Checking if the cookie is set
if(isset($_COOKIE[$cookie_name])) {
    $username = $_COOKIE[$cookie_name];
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    $username = "";
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit" name="set_cookie">Set Cookie</button>
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

</body>
</html>