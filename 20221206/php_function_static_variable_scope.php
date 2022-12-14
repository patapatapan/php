<?php

function counter($res = 0)
{
    static $res; //static保留函式的值 直到下次存取
    $res += 2;
    echo $res . "<br>";
}

counter();
counter();