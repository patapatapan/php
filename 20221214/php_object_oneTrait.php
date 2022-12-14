<?php

//設一個 Drive (驅動) 的 Trait, 有一特徵: $carName(車名) 和一行為 deiving(駕駛)
/**
 *
 */
trait Drive
{
  public $carName = 'Benz';
  public function driving()
  {
    echo "dribing {$this->carName} <br>";
  }
}

class Person
{
  public function eat()
  {
    echo "eat  <br>";
  }
}

class Student extends Person
{
  use Drive;
  public function study()
  {
    echo "study  <br>";
  }
}


$student = new Student;
$student->study();  //自己的 study()
$student->eat();    //繼承而來的 eat()
$student->driving(); //特定 trait 功能的 driving()