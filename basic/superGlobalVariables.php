<?php
//PHP超级全局变量

//$GLOBALS

$x = 75;
$y = 25;

function addition()
{
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS['y'];    
}

addition();

echo $z;

//$_SERVER

echo $_SERVER['PHP_SELF'];//当前执行脚本的文件名
echo "1<br>";

echo $_SERVER['SERVER_NAME'];//脚本所在服务器主机名
echo "2<br>";

echo $_SERVER['HTTP_HOST'];//当前请求头中Host项的内容
echo "3<br>";

echo $_SERVER['HTTP_REFERER'];//引导用户代理到当前页的前一页的地址（如果存在）
echo "4<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "5<br>";

echo $_SERVER['SCRIPT_NAME'];//包含当前脚本的路径。这在页面需要指向自己时非常有用。
echo "6<br>";

echo $_SERVER['REMOTE_ADDR'];//浏览当前页面的用户的IP地址
echo "7<br>";

echo $_SERVER['REMOTE_HOST'];//浏览当前页面的用户的主机名
echo "8<br>";

//$_REQUEST

?>