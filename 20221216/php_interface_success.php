<?php

interface Human
{
    const AGE_IS_HUMAN = false;

    public function eat();
    public function sleep();
}

interface Person
{
    public function laugh();
}

class Girl implements Person, Human
{
    public function eat()
    {

    }
    public function sleep()
    {

    }

    public function laugh()
    {

    }
}

interface Person1 extends Human
{
    public function eat();
    public function sleep();
}