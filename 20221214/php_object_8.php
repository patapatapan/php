<?php
/*class Father
{
public $pubPro = '父類別公開的屬性';
protected $protectPro = '父類別受保護的屬性';
private $priPro = '父類別私有的屬性';

public function fatherPublicPut()
{
echo $this->pubPro . "<br>";
echo $this->protectPro . "<br>";
echo $this->priPro . "<br>";
}

protected function fatherProtectPut()
{
echo $this->pubPro . "<br>";
echo $this->protectPro . "<br>";
echo $this->priPro . "<br>";
}

private function fatherPrivatePut()
{
echo $this->pubPro . "<br>";
echo $this->protectPro . "<br>";
echo $this->priPro . "<br>";
}
}
class Son extends Father
{
public function SonSelfPut()
{
echo $this->pubPro . "<br>";
echo $this->protectPro . "<br>";
echo $this->priPro . "<br>";
}
}

$father = new Father;
echo $father->pubPro . "<br>"; //ok 父類別公開的屬性
//echo $father->protectPro . "<br>"; //ng 受保護的屬性.外部無法直接訪問
//echo $father->priPro . "<br>"; //NG私有的屬性,外部無法直接訪問
echo "<br>";

echo $father->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $father->fatherProtectPut() . "<br>"; //NG受保護的方法,外部無法直接訪問
//echo $father->fatherPrivatePut() . "<br>"; //Ng私有的方法,外部無法直接訪問
echo "<br>";
$son = new Son;
echo $son->pubPro . "<br>";
//echo $son->protectPro . "<br>";
//echo $son->priPro . "<br>";
echo "<br>";

echo $son->fatherPublicPut() . "<br>";
//echo $son->fatherProtectPut() . "<br>";
echo $son->fatherPrivatePut() . "<br>";*/

class Father
{
    public $pubPro = '父類別公開的屬性';
    protected $protecPro = '父類別受保護的屬性';
    private $priPro = '父類別私有的屬性';

    public function fatherPublicPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }

    protected function fatherProtectPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }

    private function fatherPrivatePut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }
}

class Son extends Father
{
    public function SonSelfPut()
    {
        echo $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        //echo $this->priPro . "<br>";
    }
}

$father = new Father;
echo $father->pubPro . "<br>"; // OK 父類別公開的屬性
//echo $father->protecPro . "<br>"; // NG 受保護的屬性，外部無法直接訪問
//echo $father->priPro . "<br>";   //  NG 私有的屬性，外部無法直接訪問

echo $father->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $father->fatherProtectPut() . "<br>"; //NG 受保護的方法，外部無法直接訪問
//echo $father->fatherPrivatePut() . "<br>"; //NG 私有的方法，外部無法直接訪問

$son = new Son;
echo $son->pubPro . "<br>"; // OK 父類別公開的屬性
//echo $son->protecPro . "<br>";  // NG 受保護的屬性，外部無法直接訪問
//echo $son->priPro . "<br>";       //  NG 私有的屬性，外部無法直接訪問

echo $son->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $son->fatherProtectPut() . "<br>"; //NG 受保護的方法，外部無法直接訪問
//echo $son->fatherPrivatePut() . "<br>"; //NG 私有的方法，外部無法直接訪問

$son->SonSelfPut(); //其中繼承來的 $priPro 屬性是父類別私有的東西不能拿來使用