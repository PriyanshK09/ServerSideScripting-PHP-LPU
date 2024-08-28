<!-- Create a PHP Script that calculates the utility bill for elecrtricity usage based on the following criteria:
    - Residential: 
        - First 100 units: 0.5$ per unit
        - Next 100 units: 0.75$ per unit
        - Above 200 units: 1$ per unit
    - Commercial:
        - First 200 units: 1.5$ per unit
        - Above 200 units: 2$ per unit
    - Industrial:
        - Flat rate: 2.5$ per unit
Calculate the total bill based on the number of units consumed and the type of customer. -->

<?php
echo "Select a customer type:\n";
echo "1. Residential\n";
echo "2. Commercial\n";
echo "3. Industrial\n";
$customerType = readline("Enter your choice: ");

$units = readline("Enter the number of units consumed: ");

switch ($customerType) {
    case 1:
        if ($units <= 100) {
            $bill = $units * 0.5;
        } elseif ($units <= 200) {
            $bill = 100 * 0.5 + ($units - 100) * 0.75;
        } else {
            $bill = 100 * 0.5 + 100 * 0.75 + ($units - 200) * 1;
        }
        break;
    case 2:
        if ($units <= 200) {
            $bill = $units * 1.5;
        } else {
            $bill = 200 * 1.5 + ($units - 200) * 2;
        }
        break;
    case 3:
        $bill = $units * 2.5;
        break;
    default:
        echo "Invalid choice\n";
        exit;
}

echo "Customer type: $customerType\n";
echo "Units consumed: $units\n";
echo "Total bill: $bill\n";

echo "Thank you for using our service\n";
?>