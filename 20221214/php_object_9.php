<?php

namespace myabstract\pay;

//父類別
class payroll
{
    public $Name;

    public static function Payment($Hours, $PayRate, )
    { //加上final 子類別無法覆寫
        return $Hours * $PayRate;
    }
}

class BonusPayroll extends payroll
{
    //override 父類別的方法
    public static function Payment($Hours, $PayRate)
    {
        return $Hours * $PayRate + 5000;
        //改用parent 來操作
        // return parent::Payment($Hours, $PayRate) + 5000;
        // //改用父類別名稱 來操作
        // return Payroll::Payment($Hours, $PayRate) + 5000;
    }
}

echo '尚未加上獎金的薪資為' . Payroll::Payment(100, 80) . "<br>";
echo '加上獎金的薪資為' . BonusPayroll::Payment(100, 80) . "<br>";