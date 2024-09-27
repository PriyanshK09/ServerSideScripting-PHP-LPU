<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Step 2</title>
</head>
<body>
    <h1>Step 2: Enter Phone Number and Address</h1>
    <p><strong>Name:</strong> <?php echo $_REQUEST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_REQUEST['email']; ?></p>
    
    <form action="Result.php" method="post">
        <input type="hidden" name="name" value="<?php echo $_REQUEST['name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_REQUEST['email']; ?>">
        
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
