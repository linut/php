<?php
//json_encode编码
$arr = array('a','b','c','d');

var_dump(($arr));
echo json_encode($arr) . "<br>";

class Emp{
    public $name = "";
    public $hobbies = "";
    public $birthdate = "";

}

$e = new Emp();
$e->name = "tom";
$e->hobbies = "sports";
$e->birthdate = date('m/d/Y h:i:s a',"8/5/1974 12:20:03 p");
$e->birthdate = date('m/d/Y h:i:s a',strtotime("8/5/1974 12:20:03"));

echo json_encode($e) . "<br>";

//json_decode
$json = '{
    "a" : 1,
    "b" : 2,
    "c" : 3,
    "d" : 4
}';

var_dump(json_decode($json));
var_dump(json_decode($json,true));
?>