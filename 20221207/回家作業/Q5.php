<?php

function decomp($x)
{
    $len = strlen($x);
    $arr = array();
    $result = array();
    for ($i = $len; $i > 0; $i--) {
        echo floor($x / pow(10, $i - 1)) % 10 . " "; //取整除數//取餘數
    }
}

decomp(4586);