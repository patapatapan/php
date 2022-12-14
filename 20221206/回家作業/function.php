<?php
$a = $_POST['time'];
$b = $_POST['foods'];
function eat($a, $b)
{
    echo "今天" . $a . "吃" . $b . "<br>";
}
eat($a, $b);
