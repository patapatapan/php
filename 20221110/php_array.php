<?php
//直接指定陣列的值
//ex.1
$name[] = 3;
$name[] = "str";
$name[] = true;

echo $name[1] . "<br>";

//ex.2
$name1[0] = 3;
$name1[1] = "str";
$name1[2] = true;
echo $name1[2] . "<br>";

//ex.3
$name2 = [3, "str", true];
echo $name2[0] . "<br>";

//array建構式
$name3 = array(3, "str", true);
echo $name3[0] . "<br>";

print_r($name3);
echo "<br>";
var_dump($name3);
echo "<br>";

//陣列拜訪
for ($i = 0; $i < count($name3); $i++) {
    echo $name3[$i] . "<br>";
}

foreach ($name3 as $value) {
    echo $value . "<br>";
}
