<!-- Switch Statement
Create a PHP Script that simulates a Menu Selection System. The user can choose a meal type from the following options:
- Breakfast
- Lunch
- Dinner
- Snack
Based on the selection, the script should display a submenu with specific items,
and then prompt the user to choose an item. Display the name of the item selected along with a message. -->

<?php
echo "Select a meal type:\n";
echo "1. Breakfast\n";
echo "2. Lunch\n";
echo "3. Dinner\n";
echo "4. Snack\n";
$mealType = readline("Enter your choice: ");

switch ($mealType) {
    case 1:
        echo "Select a breakfast item:\n";
        echo "1. Aloo Paratha\n";
        echo "2. Poha\n";
        echo "3. Upma\n";
        echo "4. Sandwich\n";
        $breakfastItem = readline("Enter your choice: ");
        switch ($breakfastItem) {
            case 1:
                echo "You have selected Aloo Paratha\n";
                break;
            case 2:
                echo "You have selected Poha\n";
                break;
            case 3:
                echo "You have selected Upma\n";
                break;
            default:
                echo "Invalid choice\n";
        }
        break;
    case 2:
        echo "Select a lunch item:\n";
        echo "1. Roti Sabji\n";
        echo "2. Fried Rice\n";
        echo "3. Pulao\n";
        echo "4. Dosa\n";
        $lunchItem = readline("Enter your choice: ");
        switch ($lunchItem) {
            case 1:
                echo "You have selected Biryani\n";
                break;
            case 2:
                echo "You have selected Fried Rice\n";
                break;
            case 3:
                echo "You have selected Pulao\n";
                break;
            default:
                echo "Invalid choice\n";
        }
        break;
    case 3:
        echo "Select a dinner item:\n";
        echo "1. Rajma Chawal\n";
        echo "2. Pizza\n";
        echo "3. Paneer Tikka\n";
        echo "4. Idli Sambhar\n";
        $dinnerItem = readline("Enter your choice: ");
        switch ($dinnerItem) {
            case 1:
                echo "You have selected Pizza\n";
                break;
            case 2:
                echo "You have selected Pasta\n";
                break;
            case 3:
                echo "You have selected Burger\n";
                break;
            default:
                echo "Invalid choice\n";
        }
        break;
    case 4:
        echo "Select a snack item:\n";
        echo "1. Chips\n";
        echo "2. Popcorn\n";
        echo "3. Nachos\n";
        echo "4. Ice Cream\n";
        $snackItem = readline("Enter your choice: ");
        switch ($snackItem) {
            case 1:
                echo "You have selected Chips\n";
                break;
            case 2:
                echo "You have selected Popcorn\n";
                break;
            case 3:
                echo "You have selected Nachos\n";
                break;
            default:
                echo "Invalid choice\n";
        }
        break;
    default:
        echo "Invalid choice\n";
}
?>