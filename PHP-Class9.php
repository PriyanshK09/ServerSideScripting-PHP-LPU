<?php
// Function Definition
// A function is a block of code that performs a specific task.
// Functions help in reusing code and making programs more modular and manageable.

function add($a, $b) {
    // This function takes two parameters and returns their sum.
    return $a + $b;
}

// Example of calling the function
echo add(2, 3); // Outputs: 5

// Function Scopes

// 1. Local Scope
// Variables declared within a function are local to that function and cannot be accessed outside of it.

function localScopeExample() {
    $localVar = "I am local";
    echo $localVar; // Outputs: I am local
}

localScopeExample();
// echo $localVar; // Error: Undefined variable

// 2. Global Scope
// Variables declared outside of any function have a global scope and can be accessed anywhere in the script,
// but not directly inside functions. To access global variables inside a function, you need to use the `global` keyword or the `$GLOBALS` array.

$globalVar = "I am global";

function globalScopeExample() {
    global $globalVar; // Accessing the global variable inside the function
    echo $globalVar; // Outputs: I am global
}

globalScopeExample();

// 3. Static Scope
// A static variable retains its value between function calls. It is initialized only once and its value persists across multiple calls to the function.

function staticScopeExample() {
    static $count = 0; // Static variable
    $count++;
    echo $count;
}

staticScopeExample(); // Outputs: 1
staticScopeExample(); // Outputs: 2
staticScopeExample(); // Outputs: 3
?>