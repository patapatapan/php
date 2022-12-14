<?php

namespace my\name;

include "php_object_9.php";

use myabstract\pay\payroll as abc;

//在 \my\name 命名空間內定義 MyClass 類別
class Myclass
{

    public function MyFunction()
    {
    }
}

//在 \my\name 命名空間內定義 MYCONST 常數
const MYCONST = 1;

// $x = new Myclass;
// $y = MYCONST;

$x = new \my\name\Myclass;
$y = \my\name\MYCONST;

echo $y . "<br>";

$a = new \myabstract\pay\payroll;
echo $a->Payment(4, 56) . "<br>";

class test extends \myabstract\pay\Payroll

{
}

class test1 extends abc
{
}