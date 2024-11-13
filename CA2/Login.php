<?php
session_start();

$users = [
    'priyanshkhare0908@gmail.com' => 'pk@dk1234',
    'admin@mail.com' => '1234'
];

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = 'Both fields are required.';
    } else {
        if (isset($users[$email]) && $users[$email] === $password) {
            $_SESSION['email'] = $email;
            $success = 'Login successful. Redirecting...';
            header('refresh:2;url=Welcome.php');
        } else {
            $error = 'Invalid email or password.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="Login.css">
    </head>

    <body>
        <h1>Login Form</h1>
        <form method="post" action="">
            <input type="text" id="email" name="email" placeholder="Your Email"><br>
            <input type="password" id="password" name="password" placeholder="Your Password"><br>
            <input type="submit" value="Login">
        </form>
        <?php if ($error): ?>
            <p class="error" style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if ($success): ?>
            <p class="success" style="color: green;"><?php echo $success; ?></p>
        <?php endif; ?>
    </body>
</html>
