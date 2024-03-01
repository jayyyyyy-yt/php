<?php
$var1 = "123"; 
$var2 = 456; 
$var3 = 7.89; 
$var4 = true; 
$var5 = array(1, 2, 3); 
$converted1 = (int) $var1;
$converted2 = (float) $var2;
$converted3 = (bool) $var3;
$converted4 = (string) $var4;
$converted5 = (array) $var5;
$table = array(
    array("Variable Name", "Variable Type", "Variable Value", "Converted Type", "Converted Value"),
    array("var1", gettype($var1), $var1, gettype($converted1), $converted1),
    array("var2", gettype($var2), $var2, gettype($converted2), $converted2),
    array("var3", gettype($var3), $var3, gettype($converted3), $converted3),
    array("var4", gettype($var4), $var4, gettype($converted4), $converted4),
    array("var5", gettype($var5), print_r($var5, true), gettype($converted5), print_r($converted5, true))
);
echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>{$cell}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>