<?php
//数据类型
//String
$testStringSingleQuo = '字符串';
var_dump($testStringSingleQuo);
echo "<br>";
$testStringDoubleQuo = "字符串";
var_dump($testStringDoubleQuo);
echo "<br>";

//Integer
$testInteger = 0x8c;//十六进制
var_dump($testInteger);
echo "<br>";
$testInteger = 067;//八进制
var_dump($testInteger);
echo "<br>";

//Float
$testFloat = 2.435;
var_dump($testFloat);
echo "<br>";

$testFloat = 2.4e-5;
var_dump($testFloat);
echo "<br>";

//Boolean
$testBoolean = true;
var_dump($testBoolean);
echo "<br>";

//Array
$testArrayint = array(1,2,3,4,5);//整型数组
var_dump($testArrayint);
echo "<br>";
$testArraystring = array("rewr","rvrete","12324");//字符串数组
var_dump($testArraystring);
echo "<br>";
$testArrayfix = array(1,2,"sdfs",4);//混合数组
var_dump($testArrayfix);
echo "<br>";
//Object
class Car{
    var $color;
    function __construct($color = "green")
    {
        $this->color = $color;
    }

    function what_color(){
        return $this->color;
    }
}

//NULL

$testNULL = null;
var_dump($testNULL);
echo "<br>";


?>