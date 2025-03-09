<?php
// Function to determine if a number is an Armstrong number
function checkArmstrong($num) {
    $numStr = (string)$num;
    $numDigits = strlen($numStr);
    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum === $num;
}

// Example number to test
$testNumber = 9474; // Change this value to test different numbers
if (checkArmstrong($testNumber)) {
    echo "$testNumber is an Armstrong number.";
} else {
    echo "$testNumber is not an Armstrong number.";
}

echo "<br> 39.Code is executed by Prabhjot Kaur, ERP: 0221BCA047";
?>
