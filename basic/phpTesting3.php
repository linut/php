<?php

$a = array();

if ($a[1]) null;
echo count($a),"<br>";

//转义问题

$str = 'a\\b\n';   
$str2 = "\n";
$str3 = '\n';
echo '$str:'."$str<br>";
echo '$str2:'."$str2<br>";//php双引号会转义字符
echo '$str3:'."$str3<br>";//单引号不会转义


//测试到php测试三，第6题，出现表单内容，继续学习。
?>