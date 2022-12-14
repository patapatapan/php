<?php
$fruits = ["orange", "apple", "pineapple", "Banana", "Watermelon", "melon"];
$members = ["John" => "20", "Mary" => "21", "Lisa" => "19"];

var_dump($fruits);
// sort()  遞增
// rsort() 遞減
//ksort()   用鍵值做遞增排序
//asort()   用值做遞增排序
//krsort()   用鍵值做遞減排序
//arsort()   用值做遞減排序
echo "<br>";

sort($fruits);
echo "<br>";
foreach ($fruits as $key => $value) {
    echo $value . "<br>";
}

ksort($members);
echo "<br>";
foreach ($members as $name => $age) {
    echo $name . $age . "<br>";
}