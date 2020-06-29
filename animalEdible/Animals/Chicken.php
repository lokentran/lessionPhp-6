<?php
include_once('../AbstractClass/Animals.php');
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
}