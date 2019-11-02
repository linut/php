<?php

$cars = array("volvo","bmw","toyota");//自动分配ID
var_dump($cars);
echo "<br>";

$car[0] = "toyota";//手动分配ID
$car[1] = "volvo";
$car[2] = "bmw";
$car[3] = "bens";
var_dump($car);
echo "<br>";

echo count($cars),"\n",count($car);//count函数，测试能否输出\n
echo "<br>";

//遍历数组
//for循环
$arrlength = count($car);
for($x = 0;$x < $arrlength;$x++){
    echo $car[$x],"<br>";
}

//关联数组
$age = array("zhangfeng"=>"25","doukai"=>"26","wanghaoxue"=>"26");

//或者

$age['peter'] = "35";
$age["ben"] = "36";
$age['joe'] = '37';

var_dump($age);
echo "<br>";

foreach($age as $x => $value){

    echo $x . "=>" . $value,"<br>";
}

foreach($age as  $value){

    echo $value,"<br>";
}
//数组排序
//非关联数组
sort($car);//升序
var_dump($car);
rsort($car);//降序
var_dump($car);

//关联数组
/**
 * asort() - 根据关联数组的值，对数组进行升序排列
 * ksort() - 根据关联数组的键，对数组进行升序排列
 * arsort() - 根据关联数组的值，对数组进行降序排列
 * krsort() - 根据关联数组的键，对数组进行降序排列
 */
asort($age);
var_dump($age);
ksort($age);
var_dump($age);
arsort($age);
var_dump($age);
krsort($age);
var_dump($age);
?>