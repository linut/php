<?php
/*比较类型分为两种，松散比较“==”和严格比较“===”
松散比较只比较值，而严格比较不仅比较值，还比较类型。
这里就出现一个常见问题，就是0 false null之间的比较，如下测试代码：
*/
echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo PHP_EOL;
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo PHP_EOL;
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo PHP_EOL;
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo PHP_EOL;
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo PHP_EOL;
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo PHP_EOL;
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);

/*
总结，如果是严格比较，只有自己和自己比较才是true;其他都是false。
松散比较中，比较特殊的是字符"0"与null的比较，结果是false.其他都是true，因为空字符串""和null比较才是true。
*/
?>
