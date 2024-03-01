<?php
$sweetPerDay = 5;
$pricePerKg = 430; 
$persons = 15; 
$daysInMonth = 30; 
$Sold = $sweetPerDay * $persons * $daysInMonth; 
$amount = $Sold * $pricePerKg;
echo "The shopkeeper sold $Sold kg of sweet in one month, earning Rs. $amount";
?>