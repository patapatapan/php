<?php

class Transform
{

    const lb = 0.454; //kg
    const inch = 2.54; //cm
    public function trans($w, $h)
    {

        $weight = $w / (Transform::lb);
        $height = $h / (Transform::inch);

        echo $h . "公分 = " . $height . "英吋" . "<br>";
        echo $w . "公斤 = " . $weight . "磅" . "<br>";
    }
}

$tran = new Transform;
echo $tran->trans($w, $h);