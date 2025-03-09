<?php
$marks=array("Maths"=>96,"English"=>68,"Computer science"=>87, "Science"=>89,"Social science"=>67);
foreach ($marks as $subject=>$mark){
  echo"$subject: $mark<br>";
}
$sums=0;
foreach($marks as  $value){
  $sums+=$value;
}
echo"Sum of marks: $sums<br>";
$percent=(float)$sums/5;
echo"Percentage: $percent %<br>";
echo "<br>44.Code is executed by Prabhjot Kaur, ERP: 0221BCA047";
 
?>