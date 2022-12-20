<?php

interface Person
{
    //public $height;
    //protected $weight;
    //private $age;

    //public static $interest;
    //protected static $appearance;
    //private $character;
}

//不可實例化
interface Person1
{
    public function eat();
    public function sleep();
}

$Person1 = new Person1();

//不可以實作⽅法內容

interface Person2
{
    // public function eat()
    // {
    // }
    // public function sleep()
    // {
    // }
}