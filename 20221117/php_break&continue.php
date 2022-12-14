<?php

$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i == 70) {
        break;
    }
    $sum += $i;
}
echo $sum . "<br>";

$sum1 = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i == 70 || $i == 99) {
        continue;
    }
    $sum1 += $i;
}
echo $sum1 . "<br>";