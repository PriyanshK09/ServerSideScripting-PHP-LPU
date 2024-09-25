<!-- Develop a PHP program to manage an array of products quantities in an online store's inventory -->
<!-- Priyansh Khare, 12217140, B45, K22JA -->
 
<?php

$originalArray = [100, 200, 150, 300, 250];
$oldInventory = $originalArray;
echo "Choose an option:\n";
echo "1. Add Inventory\n";
echo "2. Remove Inventory\n";
echo "3. Update Inventory\n";
echo "4. Total Inventory\n";
echo "5. Exit\n";
$ch = readline("Enter your choice: ");


switch ($ch) {
    case 1:
        $quantity = readline("Enter quantity to add: ");
        array_push($originalArray, (int)$quantity);
        $newArr1 = $originalArray;

    case 2:
        $index = readline("Enter index to remove: ");
        if (isset($originalArray[$index])) {
            unset($originalArray[$index]);
            $originalArray = array_values($originalArray);
            $newArr2 = $originalArray;
        } else {
            echo "Invalid index.\n";
        }

    case 3:
        $index = readline("Enter index to update: ");
        foreach ($originalArray as $key => $value) {
            if ($key == $index) {
                $quantity = readline("Enter new quantity: ");
                $originalArray[$key] = (int)$quantity;
                $newArr3 = $originalArray;
            }
        }

    case 4:
        $total = array_sum($originalArray);
        break;

    case 5:
        echo "Exiting...\n";
        break;

    default:
        echo "Invalid choice. Please try again.\n";
        break;
}

echo "Original Inventory: ";
foreach ($oldInventory as $value) {
    echo $value . " ";
}
echo "\n";

echo "Updated Inventory after adding: ";
foreach ($newArr1 as $value) {
    echo $value . " ";
}
echo "\n";

echo "Updated Inventory after removing: ";
foreach ($newArr2 as $value) {
    echo $value . " ";
}
echo "\n";

echo "Total Inventory: ";
echo $total . "\n";
