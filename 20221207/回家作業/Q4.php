<?php

function Sin_Dou($x)
{

    if (($x % 2) == 1) {
        echo $x . "是奇數" . "<br>";
    } else {
        echo $x . "是偶數" . "<br>";
    }
}

Sin_Dou($x);