<!-- What is a Function -->
<!-- A function is a block of code that performs a specific task. 
 You can reuse functions in your code, which makes your code more modular and easier to read. -->

<?php
// Function to add two numbers
function add($a, $b) {
    return $a + $b;
}

// Function to subtract two numbers
function subtract($a, $b) {
    return $a - $b;
}

// Function to multiply two numbers
function multiply($a, $b) {
    return $a * $b;
}

// Function to divide two numbers
function divide($a, $b) {
    if ($b == 0) {
        return "Division by zero error!";
    }
    return $a / $b;
}

// Example usage
echo "Addition: " . add(10, 5) . "\n";
echo "Subtraction: " . subtract(10, 5) . "\n";
echo "Multiplication: " . multiply(10, 5) . "\n";
echo "Division: " . divide(10, 5) . "\n";
?>


<!-- Swapping -->
<!-- Swapping is the process of exchanging the values of two variables.
    This is a common operation in programming and can be done using a temporary variable or without one. -->

<?php
// Swapping with a temporary variable
$a = 10;
$b = 20;

$temp = $a;
$a = $b;
$b = $temp;

echo "a = $a, b = $b\n";

// Swapping without a temporary variable
$a = 10;
$b = 20;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b\n";
?>