<?php

//直接賦予值
$array2d[][] = 123;
$array2d[0][1] = "abc";

print_r($array2d);
echo $array2d . "<br>";
//函式嵌套
$row0 = array(64, 65);
$row1 = array(77, 81);
$row2 = array(89, 93);

$grade = array($row0, $row1, $row2);
print_r($grade);
echo "<br>";

$grade[1][0] = 30;
$total = 0;

for ($row = 0; $row < count($grade); $row++) {
    $sum = 0;
    for ($col = 0; $col < count($grade[$col]); $col++) {
        $sum += $grade[$row][$col];
        $total += $grade[$row][$col];
    }
    echo "第" . $row + 1 . "項小計 = " . $sum . "<br>";
}
echo "總計為 : " . $total . "<br>";
print_r($grade);