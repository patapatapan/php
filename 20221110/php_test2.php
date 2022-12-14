<?php

$score = array(array(101, 102, 104, 105, 106),
    array(200, 201, 203, 205, 300));
$sum1 = 0;
$sum2 = 0;
$total = 0;
//$str = "";
//echo count($score) . "<br>";
//echo count($score[0]) . "<br>";

//-----------二維------------
for ($i = 0; $i < count($score); $i++) {
    $sum = 0;
    for ($j = 0; $j < count($score[$i]); $j++) {
        // $score[i][j]
        $sum += $score[$i][$j];
        $total += $score[$i][$j];
    }
    echo $sum . "<br>";
}
//echo $sum . "<br>" ;
//echo $sum1 . "<br>" ;
//echo $sum2 . "<br>" ;
echo $total . "<br>";