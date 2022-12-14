<?php
class Peo
{
    public $peoName = "johnny";

    //定義方法
    public function showSelf()
    {
        echo "Say Hi!";
        echo $this->peoName . "<br>";
    }
}

$peo = new Peo;
$peo->peoName = "pata";
$peo->showSelf();
print_r($peo);
echo $peo;