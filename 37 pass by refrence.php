<?php
    function selfMultiply(&$number)
    {
        $number += $number;
        return $number;
    }

    $mynum = 5;
    echo "Original value:{$mynum} <br>";

    selfMultiply($mynum);
    echo "Value after function call: {$mynum} <br>";
echo "<br>37.Code is executed by Prabhjot Kaur, ERP: 0221BCA047";

?>