<!-- Custom BMI Calculator -->
 <!-- Write a function calculateBMI($weight, $height) that calculates the BMI based on the weight (in kgs) and height (in meters) of a person. -->
 <!-- Returns a message indicating whether the user is underweight, nortmal weight, overweight, or obese -->

<?php
function calculateBMI($weight, $height)
{
    $bmi = $weight / ($height * $height);
    if ($bmi < 18.5) {
        return 'Underweight';
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return 'Normal Weight';
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return 'Overweight';
    } else {
        return 'Obese';
    }
}

// User Input
$weight = readline('Enter the Weight in Kgs: ');
$height = readline('Enter the Height in Meters: ');

$bmi = calculateBMI($weight, $height);
echo "BMI indicates that you are $bmi\n";
?>