<?php 
abstract class AbstractClass
{
    // Các lớp kế thừa bắt buộc phải cài đặt các phương thức này
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
 
    // Phương thức thông thường
    public function printOut() {
        print $this->getValue() ;
    }
}
 
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }
 
    public function prefixValue($prefix) {
        return "$prefix ConcreteClass1";
    }
}
 
class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }
 
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}
 
$class1 = new ConcreteClass1();
$class1->printOut();

echo "<br>";

echo $class1->prefixValue('Tung__');