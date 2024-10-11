<?php
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim($_POST['full_name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $contactNumber = trim($_POST['contact_number']);
    $eventDate = trim($_POST['event_date']);
    $attendees = trim($_POST['attendees']);
    $comments = trim($_POST['comments']);

    if (empty($fullName)) {
        $errors['full_name'] = "Full name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "A valid email is required.";
    }

    if (empty($contactNumber)) {
        $errors['contact_number'] = "Contact number is required.";
    }

    $currentDate = date("Y-m-d");
    if (empty($eventDate)) {
        $errors['event_date'] = "Event date is required.";
    } elseif ($eventDate <= $currentDate) {
        $errors['event_date'] = "Event date must be greater than today's date.";
    }

    if (empty($attendees)) {
        $errors['attendees'] = "Number of attendees is required.";
    } elseif (!filter_var($attendees, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
        $errors['attendees'] = "Number of attendees must be a positive number.";
    }

    if (!empty($comments) && strlen($comments) > 200) {
        $errors['comments'] = "Comments should not exceed 200 characters.";
    }

    if (empty($errors)) {
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
        .required {
            color: red;
        }
    </style>
</head>
<body>

<h2>Event Registration Form</h2>    

<?php if (!empty($success)): ?>
    <p style="color:green;"><?php echo $success; ?></p>
<?php endif; ?>

<form action="" method="POST">
    <label for="full_name">Full Name: <span class="required">*</span></label>
    <input type="text" name="full_name" id="full_name" value="<?php echo isset($fullName) ? htmlspecialchars($fullName) : ''; ?>">
    <span style="color:red;"><?php echo $errors['full_name'] ?? ''; ?></span>
    <br><br>

    <label for="email">Email: <span class="required">*</span></label>
    <input type="email" name="email" id="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
    <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
    <br><br>

    <label for="contact_number">Contact Number: <span class="required">*</span></label>
    <input type="text" name="contact_number" id="contact_number" value="<?php echo isset($contactNumber) ? htmlspecialchars($contactNumber) : ''; ?>">
    <span style="color:red;"><?php echo $errors['contact_number'] ?? ''; ?></span>
    <br><br>

    <label for="event_date">Event Date: <span class="required">*</span></label>
    <input type="date" name="event_date" id="event_date" value="<?php echo isset($eventDate) ? htmlspecialchars($eventDate) : ''; ?>">
    <span style="color:red;"><?php echo $errors['event_date'] ?? ''; ?></span>
    <br><br>

    <label for="attendees">Number of Attendees: <span class="required">*</span></label>
    <input type="number" name="attendees" id="attendees" value="<?php echo isset($attendees) ? htmlspecialchars($attendees) : ''; ?>">
    <span style="color:red;"><?php echo $errors['attendees'] ?? ''; ?></span>
    <br><br>

    <label for="comments">Comments (Optional, max 200 characters):</label>
    <textarea name="comments" id="comments" maxlength="200"><?php echo isset($comments) ? htmlspecialchars($comments) : ''; ?></textarea>
    <span style="color:red;"><?php echo $errors['comments'] ?? ''; ?></span>
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>