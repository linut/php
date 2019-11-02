<?php
//算术运算符
var_dump(intdiv(10,3));
echo "<br>";

//赋值运算符 = 
$x = 1;
$y = 2;
$str1 = "abc";
$str2 = "qwe";

$x += $y;

$x -= $y;

$x *= $y;

$x /= $y;

$x %= $y;

$str1 .= $str2;
var_dump($str1);
echo "并置运算<br>";
/*比较运算符

等于 == 值相等就返回true
绝对等于 === 不仅要值相等，而且类型要相等，否则返回false

*/
$cx = "5";
$cy = 5;

echo $cx == $cy,"等于<br>";
var_dump($cx === $cy);
echo $cx === $cy,"绝对等于<br>";

/*
同理，还有不等于 !=  和绝对不等于  !==
*/ 

//逻辑运算符

/*主要是或与非和异或
或“or || ”  只要有一个为true，则为true
与“and &&”
非“!”
异或“xor”   有且只有一个为true，则为true
*/

$Lx = 3;
$Ly = 0;
$Lz = 2;

$temp = ($Lx or $Lz);
var_dump($temp);
echo "或<br>";
$temp = ($Lx xor $Lz);
var_dump($temp);
echo "异或f<br>";
$temp = ($Ly xor $Lz);
var_dump($temp);
echo "异或t<br>";
//数组运算符
/*
+ 数组合并
== 键值对相等
=== 键值对相等，且类型相同
!=和<> 不相等
!== 不恒等，类型不同

*/

//三元运算符“?:”
$test = "张锋";

$username = isset($test)?$test:"nobody";

echo $username,PHP_EOL;
//php5.3，版本写法
$username = $tett ?: "nobody";
echo $username,"<br>";

//组合比较符（PHP7+）
// <=>
//相等返回0，大于返回1，小于返回-1.字符比较是通过其ascII码比较


// 字符串,按位比较，如果我第一位比你大，后面就算你比我大也没用
echo "abc" <=> "b","<br>"; 
echo "abc" <=> "a","<br>"; 
echo "ab" <=> "ac","<br>"; 

//运算符优先级
// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or
 
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true 

//引用运算符
$qa = 5;
$qb = &$qa;
var_dump($qb);
echo "<br>";
$qa = 8;//改变a的值，如果是引用的话，那么b的值也会改变。
var_dump($qb);
echo "<br>";
?>