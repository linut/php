<?php

define("FENG",18018,TRUE);

function test(){
	
	echo FENG;
}

test();

echo "<br>";

$var = false ? 1 : false ? 2 : false ? 4 : 5;	

echo "<br>";


var_dump($var);//结果是5，不看前面的，只看最后一个 ： 前后结果。

//当有多个catch语句时，如果父类型在前面，那么父类型将会被匹配，子类型隐藏。
class MyException extends Exception
{
}
try {
    throw new MyException('Oops!');
} catch (Exception $e) {
    echo "Caught Exception\n";
} catch (MyException $e) {
    echo "Caught MyException\n";
}


echo "<br>";

?>