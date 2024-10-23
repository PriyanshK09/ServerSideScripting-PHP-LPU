<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h1>Upload Image</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<p>Image uploaded successfully!</p>";
        } else {
            echo "<p>Sorry, there was an error moving the uploaded file.</p>";
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Upload</button>
    </form>

    <h2>Gallery</h2>
    <div>
        <?php
        $images = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image" style="width:200px; margin:10px;">';
        }
        ?>
    </div>
</body>
</html>
