<?php

function F($w, $h)
{
    $retan[] = "";

    for ($i = 0; $i < $w; $i++) {
        $retan[$i] = $i + 1;

        //array_push($retan, $pow);
        //echo rand(0, $w * $h) . "  ";

    }
    return $retan;
    echo implode(',', $retan) . " ";
    echo "<br>";

    //return $retan;
    print_r($retan);
}

$w = $_GET['width'];
$h = $_GET['height'];
F($w, $h);
//print_r($retan);