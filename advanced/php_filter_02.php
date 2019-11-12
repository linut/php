<?php
//检测一个数字是否在一个范围内
$int = 122;
$min = 1;
$max = 200;

if(filter_var($int,FILTER_VALIDATE_INT,array("options" => array("min_range"=>$min,"max_range"=>$max))) === false){
    echo("变量值不在合法范围内");
}else{
    echo "变量值在合法范围内";
}

?>