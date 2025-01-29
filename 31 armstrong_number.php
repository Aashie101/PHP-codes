<?php
// Function to check if a number is an Armstrong number
function isArmstrongNumber($num) {
    // Convert the number to a string to count the digits
    $numStr = strval($num);
    $numDigits = strlen($numStr);

    $sum = 0;
    $temp = $num;

    // Calculate the sum of the digits raised to the power of the number of digits
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    // If the sum equals the original number, it's an Armstrong number
    return $sum == $num;
}

// Test the function
$number = 153; // You can change this number to test other cases
if (isArmstrongNumber($number)) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}
echo "<br>31. Code is executed by Prabhjot Kaur ERP: 0221BCA047";
?>
