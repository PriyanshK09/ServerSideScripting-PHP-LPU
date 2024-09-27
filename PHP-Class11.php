<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getName'])) {
    echo "Name received via GET: " . htmlspecialchars($_GET['getName']) . "<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['postName'])) {
    echo "Name received via POST: " . htmlspecialchars($_POST['postName']) . "<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['requestName'])) {
    echo "Name received via REQUEST: " . htmlspecialchars($_REQUEST['requestName']) . "<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
}
?>
