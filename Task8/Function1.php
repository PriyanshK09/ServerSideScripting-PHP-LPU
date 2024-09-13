<!-- Function to Calculate the Area of Different Shapes -->
 <!-- Create a PHP Function that calculates the area of Rectangle, Triangle, or Circle based on user Input.
  The function should take the shape type and its dimensions as parameters and return the area. -->
  <!-- Hint :
   - Rectangle = Take Length and Width
   - Triangle = Take base and height
   - Circle = Take radius -->

<?php
function calculateArea($shape, $dimension1, $dimension2 = 0)
{
    switch ($shape) {
        case 'Rectangle':
            return $dimension1 * $dimension2;
            break;
        case 'Triangle':
            return 0.5 * $dimension1 * $dimension2;
            break;
        case 'Circle':
            return 3.14 * $dimension1 * $dimension1;
            break;
        default:
            return 'Invalid Shape';
    }
}

// User Input
$shape = readline('Enter the Shape (Rectangle, Triangle, Circle): ');
$dimension1 = readline('Enter the Dimension 1: ');
$dimension2 = 0;
if ($shape == 'Rectangle' || $shape == 'Triangle') {
    $dimension2 = readline('Enter the Dimension 2: ');
}

// Calculate Area
$area = calculateArea($shape, $dimension1, $dimension2);
echo "Area of $shape is $area\n";
?>