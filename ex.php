<?php

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function talk(){
        //Do stuff here
    }

    protected function walk(){
        //Do stuff here
    }

    private function swim(){
        //Do stuff here
    }
}

class Tom extends Person
{

}

$tom1 = new Tom();
