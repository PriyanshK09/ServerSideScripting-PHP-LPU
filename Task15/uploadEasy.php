<?php
if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];

    if(move_uploaded_file($file_tmp, 'uploads/'.$file_name)){
        echo 'File uploaded successfully';
    }else{
        echo 'File not uploaded';
    }
}
?>

<html>
<head>
    <title>Upload File</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>