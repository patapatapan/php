<?php

function F($w, $h)
{
    $ret = array();
    $result = $w * $h;
    $ans = array();
    //echo strlen($result) . "<br>";  //檢測最大數值字串長度

    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j < $w; $j++) {
            $ret[$i][$j] = ($j + 1) * ($i + 1);
            if (strlen($ret[$i][$j]) < strlen($result)) {
                //str_pad(字串, 長度, 補上的字串, 補上的方式)
                $len = str_pad($ret[$i][$j], strlen($result), "0", STR_PAD_LEFT); //將字串不足長度從左側補上
            } else {
                $len = $ret[$i][$j];
            }
            $ans[$i][$j] = $len;
        }
    }

    foreach ($ans as $value) {
        echo implode('　', $value) . "<br>";
    }
}

F(4, 3);