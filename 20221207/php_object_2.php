<?php
class Peo
{
    public $peoName = "johnny";

    private function showSelf()
    {
        echo "Say Hi!";

    }
    //定義方法
    public function canUsedFunc()
    {
        $this->peoName;
        $this->showSelf();
    }
}

$peo = new Peo;
echo $peo->peoName . "<br>";
$peo->peoName = "pata";
echo $peo->peoName . "<br>";

$peo->canUsedFunc();
//print_r($peo);