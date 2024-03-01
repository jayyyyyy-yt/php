<?php
$subject1 = 80; 
$subject2 = 75; 
$subject3 = 90; 
$totalMarks = $subject1 + $subject2 + $subject3;
$totalSubjects = 3; 
$maxMarksPerSubject = 100; 
$percentage = ($totalMarks / ($totalSubjects * $maxMarksPerSubject)) * 100;
echo "Total marks: $totalMarks\n";
echo "Percentage: $percentage%";
?>