<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Division by zero error!';
            }
            break;
        default:
            $result = 'Invalid operation selected!';
    }

    echo "<h1>Result: $result</h1>";
} else {
    echo "<h1>Invalid input!</h1>";
}
?>
