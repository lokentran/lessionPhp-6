<?php 
abstract class AbstractClass {
    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass {
    public function prefixName($name, $separator=".") {
        if($name == "Pacman") {
            $prefix = "Mr";
        } else if($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class1 = new ConcreteClass();
echo $class1->prefixName("Pacman");
echo $class1->prefixName("Pacwoman");