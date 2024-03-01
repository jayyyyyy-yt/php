<?php
$cm = 170; 
$inc = $cm * 0.393701; 
$Feet = floor($inc / 12); 
$inc = $inc % 12; 
echo "$cm centimeters is equal to $Feet feet and $inc inches";
?>