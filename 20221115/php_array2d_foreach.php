<?php

//直接賦予值
$array2d[][] = 123;
$array2d[0][1] = "abc";

//函式嵌套
$row0 = array(64, 65);
$row1 = array(77, 81);
$row2 = array(89, 93);

$grade = array($row0, $row1, $row2);
print_r($grade);
echo "<br>";

$grade[1][0] = 30;
$total = 0;

$row = 0;
foreach ($grade as $matrix) {
    $sum = 0;
    foreach ($matrix as $element) {
        $sum += $element;
        $total += $element;
    }
    $row++;
    echo "第" . $row . "項小計 = " . $sum . "<br>";
}
echo "總計為:{$total} <br>";
print_r($grade);