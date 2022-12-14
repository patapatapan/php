<?php

class Peo
{
    public $peoName;

    public function __construct($str)
    {
        $this->peoName = $str;
    }
}

$obj1 = new Peo("黃彥彰");
$obj2 = new Peo("黃彥彰");
$obj3 = $obj1;

if ($obj2 == $obj1) {
    echo "obj2成員的值與obj1相同";
} else {
    echo "obj2成員的值與obj1不同";
}
echo "<br>";
if ($obj2 === $obj1) {
    echo "obj2 obj1 指向相同案例";
} else {
    echo "obj2 obj1 指向不同案例";
}
echo "<br>";

if ($obj3 === $obj1) {
    echo "obj3 obj1 指向相同案例";
} else {
    echo "obj3 obj1 指向不同案例";
}