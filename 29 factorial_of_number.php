<?php
function factorial($number) {
    $fact = 1;
    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$number = 5;
echo "The factorial of $number is: " . factorial($number);

echo "<br>29. Code is executed by Prabhjot Kaur ERP: 0221BCA047";
?>
