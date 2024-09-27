<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    <p><strong>Name:</strong> <?php echo $_REQUEST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_REQUEST['email']; ?></p>
    <p><strong>Phone Number:</strong> <?php echo $_REQUEST['phone']; ?></p>
    <p><strong>Address:</strong> <?php echo $_REQUEST['address']; ?></p>
</body>
</html>
