<!-- Create a PHP Script that calculates the discount on a product based on the following criteria:
- If the customer is a regular customer, and the purchase amount is more than 500$, give a 20% discount.
- If the customer is a regular customer, and the purchase amount is 500$ or less, give a 10% discount.
- If the customer is not a regular customer, and the purchase amount is more than 500$, give a 5% discount.
- If the customer is not a regular customer, and the purchase amount is 500$ or less, no discount is given.
Display the final amount after applying the discount. -->

<?php
$customerType = readline("Enter the customer type (regular/new): ");
$purchaseAmount = readline("Enter the purchase amount: ");
$discount = 0;
$finalAmount = 0;

if ($customerType == "regular") {
    if ($purchaseAmount > 500) {
        $discount = 0.2;
        $finalAmount = $purchaseAmount - ($purchaseAmount * $discount);
        echo "Welcome Back! Final amount after applying discount: " . $finalAmount;
    } else {
        $discount = 0.1;
        $finalAmount = $purchaseAmount - ($purchaseAmount * $discount);
        echo "Welcome Back! Final amount after applying discount: " . $finalAmount;
    }
} else {
    if ($purchaseAmount > 500) {
        $discount = 0.05;
        $finalAmount = $purchaseAmount - ($purchaseAmount * $discount);
        echo "Welcome! Final amount after applying discount: " . $finalAmount;
    } else {
        $discount = 0;
        $finalAmount = $purchaseAmount - ($purchaseAmount * $discount);
        echo "Welcome! Final amount after applying discount: " . $finalAmount;
    }
}

