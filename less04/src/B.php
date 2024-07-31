<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
    
class B extends A {

}

$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

// => 1234, результат тот же. Позднее статическое связывание, и так как свойство статическое у родителя указывает оно на класс где описан
