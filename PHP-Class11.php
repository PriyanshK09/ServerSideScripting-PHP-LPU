<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getName'])) {
    echo "Name received via GET: " . htmlspecialchars($_GET['getName']) . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['postName'])) {
    echo "Name received via POST: " . htmlspecialchars($_POST['postName']) . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['requestName'])) {
    echo "Name received via REQUEST: " . htmlspecialchars($_REQUEST['requestName']) . "<br>";
}
?>
