<?php

class A{
    public $name = "HEllo!";


}
class B{
    public $brand = "My class!";
}

$a = new A();
$b = new B();
var_dump ($a instanceof B);

?>