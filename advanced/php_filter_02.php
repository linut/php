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

echo "<br>";
//检测IPv6地址

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) === false){
    echo "$ip 是一个IPv6地址";
}else{
    echo "$ip 不是一个Ipv6地址";
}

echo "<br>";
//检测URL-必须包含QUERY_STRING(查询字符串)
$url = "http://www.machmall.com/";
$url2 = "dhttp://www.baidu.com/1_2.php?abc=456#55%20select%20union";

if(!filter_var($url2,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false){
    echo "$url2 是一个合法的 URL";
}else{
    echo "$url2 不是一个合法的 URL";
}

echo "<br>";

//移除ASCII值大于127的字符

$str = "<h1>Hello WorldÆØÅ!</h1>";


$newstr = filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $newstr;

?>