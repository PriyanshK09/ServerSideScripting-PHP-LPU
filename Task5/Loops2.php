<!-- Create a PHP Script that finds all prime number within a given range, where the range
is defined by two user input "start" and "end". The script should output the prime
numbers in the range and the total number of prime numbers found. -->

<?php
$start = readline("Enter the start of the range: ");
$end = readline("Enter the end of the range: ");
$primeNumbers = array();

for ($i = $start; $i <= $end; $i++) {
    $isPrime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime && $i > 1) {
        $primeNumbers[] = $i;
    }
}

echo "Prime numbers in the range $start to $end are: " . implode(", ", $primeNumbers) . "\n";
echo "Total number of prime numbers found: " . count($primeNumbers) . "\n";
?>