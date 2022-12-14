<?php

$score = array(101, 102, 104, 105, 106);

$sum = 0;

$str = "";
echo count($score) . "<br>";

//--------一維------------
for ($i = 0; $i < count($score); $i++) {
    $sum += $score[$i];
    if ($i == 0) {
        $str = $score[$i];
    } else {
        $str = $str . "+" . $score[$i];
    }
}
echo $str . "=" . $sum . "<br>";