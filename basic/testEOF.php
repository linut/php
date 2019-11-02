<?php
$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;

$name1="变量会被解析";
$a=<<<EOF
$name1<br><a>html格式会被解析</a><br/>双引号和Html格式外的其他内容都不会被解析
"双引号外所有被排列好的格式都会被保留"
"但是双引号内会保留转义符的转义效果,比如table:\t和换行：\n下一行"
<br>
'单引号内内会保留转义符的转义效果,也会解释内嵌变量,比如$name1,table:\t和换行：\n下一行'
EOF;
echo $a;

?>