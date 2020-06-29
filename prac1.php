<?php

abstract class AbstractClass {
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Phuong thuc thong thuong
    public function printOut() {
        print $this->getValue();
    }
}

?>