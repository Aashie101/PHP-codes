<?php
// Function to count the number of digits in a given number without using inbuilt functions
function countDigits($num) {
    if ($num == 0) return 1;
    
    $count = 0;
    while ($num != 0) {
        $num = (int)($num / 10);
        $count++;
    }
    return $count;
}

// Example number to test
$testNumber = 9474; // Change this value to test different numbers
echo "Number of digits in $testNumber: " . countDigits($testNumber);

echo "<br>40.Code is executed by Prabhjot Kaur, ERP: 0221BCA047";
?>