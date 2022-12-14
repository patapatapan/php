<?php

function square($a, $b)
{
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $a; $j++) {
            echo $b . " ";
        }
        echo "<br>";
    }
}
//$a = $_GET['pow'];
//$b = $_GET['text'];
square(5, '#');