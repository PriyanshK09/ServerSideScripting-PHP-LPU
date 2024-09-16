<!-- STATIC Scope -->
<!-- Program to increment -->

<?php
function static_var() {
    static $a = 10;
    static $b = 20;
    $a++;
    $b++;
    echo "a: $a, b: $b\n";
}

function nostatic_var() {
    $a = 10;
    $b = 20;
    $a++;
    $b++;
    echo "a: $a, b: $b\n";
}

echo "Static Variables:\n";
static_var();
static_var();
static_var();

echo "Non-Static Variables:\n";
nostatic_var();
nostatic_var();
nostatic_var();
?>