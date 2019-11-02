<?php

class Base{
    public function sayHello(){
        echo "Hello";
    }
}

trait SayWorld{
    public function sayHello(){
        parent::sayHello();
        echo " World!";
        echo "<br>",__TRAIT__;
    }
}

class MyHelloWorld extends Base{

    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

$a = "feng";
echo "a = $a";
echo "<br>";
echo "a = \$a";
?>