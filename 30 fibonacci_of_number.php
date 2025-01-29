<?php
function fibonacci($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci series up to $n terms: ";
    
    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$n = 10;  
fibonacci($n);

echo "<br>30. Code is executed by Prabhjot Kaur ERP: 0221BCA047";
?>
