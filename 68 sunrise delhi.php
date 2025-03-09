<?php

    // Calculate the sunrise and sunset time for Delhi, India
    // Latitude: 28.61 North
    // Longitude: 77.23 East
    // Zenith ~= 90
    // Offset: +5.5 GMT
    
    echo "Delhi, India<br>";
    echo("Date: " . date("D M d Y"));
    echo("<br>Sunrise time: ");
    echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.61, 77.23, 90, 5.5));
    echo("<br>Sunset time: ");
    echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.61, 77.23, 90, 5.5));
    echo "<br>68.Code is executed by Prabhjot Kaur, ERP: 0221BCA047"; 

?>