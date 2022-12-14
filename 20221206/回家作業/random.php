<?php

$arg1 = $_GET['arg1'];
$arg2 = $_GET['arg2'];
$arg3 = $_GET['arg3'];

function gen($arg1, $arg2, $arg3)
{
    /*if ($arg3 > ($arg2 - $arg1)){

    }*/
    $Result = array();
    for ($i = 0; $i < $arg3; $i++) {
        $ran = rand($arg1, $arg2);
        if (in_array($ran, $Result)) {
            $i--;
        } else {
            $Result[] = $ran;
            //array_push($Result, $Result[$i]);
        }
        /*for ($j = 0; $j < $i; $j++){
    if ($Result[$j] == $Result[$i]) {
    $j = 0;
    $Result[$i] = rand($arg1, $arg2);
    }

    }*/

    }
    return $Result;
}

$ReturnArray = gen($arg1, $arg2, $arg3);
print_r($ReturnArray);
echo "<br>";

for ($i = 0; $i < $arg3; $i++) {
    for ($j = $i + 1; $j < $arg3; $j++) {
        if ($ReturnArray[$i] > $ReturnArray[$j]) {
            $temp = $ReturnArray[$j];
            $ReturnArray[$j] = $ReturnArray[$i];
            $ReturnArray[$i] = $temp;
        }
    }
    echo $ReturnArray[$i] . "<br>";
}