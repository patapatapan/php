<?php
abstract class Pay
{
    public $EmpNme;
    //定義一個抽象方法: 須公開不能有實作的內容 {}
    abstract public function Payment($Hour, $PayRate);
}

class BonusPay extends Pay
{
    public function Payment($Hour, $PayRate)
    {
        return $Hour * $PayRate + 5000;
    }
}

$obj = new BonusPay;
echo '加上獎金的薪資為' . $obj->Payment(100, 80) . "<br>";
