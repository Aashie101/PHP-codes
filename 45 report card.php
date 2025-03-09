<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Card</title>
  <style>
    table,td,th{
      border:1px solid black;
    }

  </style>
</head>
<body>
  <?php
  $marks=array("Maths"=>96,"English"=>68,"Computer science"=>87, "Science"=>89,"Social science"=>67);
  $total=array_sum($marks);
  $total_subjects= count($marks);
  $total_percent= $total_subjects*100;
  $percent=(float)($total/$total_percent)*100;
  $serial_number=1;
  echo"Total Marks $total<br>";
  echo"Percentage: $percent<br>";
  echo"Report Card<br>";
  echo"<table>
  <tr><th>SNo.</th><th>Subject</th><th>Marks</th></tr>";
  foreach($marks as $subject=>$value){
    echo"<tr><td>$serial_number</td><td>$subject</td><td>$value</td></tr>";
    $serial_number++;
  }
  echo"<tr><td></td><td>Total</td><td>$total</td></tr>";
  echo"<tr><td></td><td>Percent</td><td>$percent %</td></tr></table>";
  echo "<br>45.Code is executed by Prabhjot Kaur, ERP: 0221BCA047";
  ?>
</body>
</html>
