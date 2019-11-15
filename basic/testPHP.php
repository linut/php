<?php

$arr = array(
    'a'=>1,
    'b'=>2,
    'c'=>3,
    'd'=>4,
    'e'=>5
);

foreach ($arr as $value){
	echo $value . "<br>";
}
foreach($arr as $key=>$value){
    echo $key . "=>" .$value . "<br>";
}


echo "你好呀！";
?>