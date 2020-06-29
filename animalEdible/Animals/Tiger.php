<?php

include_once('../AbstractClass/Animals.php');

class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }
}

