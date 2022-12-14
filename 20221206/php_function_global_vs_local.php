<?php

$Msg = "Hello, This is outside of Func1()";
echo $Msg . "<br>";
Func1();
echo $M . "<br>";

function Func1()
{
    $M = "Hello, This is inside of Func1()";
    echo $M . "<br>";
}