<?php
	$global_var01 = 6;//全局变量
	echo "全局变量值：$global_var01";
	echo PHP_EOL;

	function TestVar(){

		$local_var01 = 7;
		echo "局部变量值：$local_var01";
		echo PHP_EOL;

		echo "测试全局变量能否在不声明下使用：$global_var01";
		echo PHP_EOL;

		global $global_var01;//声明全局变量

		echo "声明后的全局变量值：$global_var01";
		echo PHP_EOL;

	}

	TestVar();

	function TestVarStatic(){//测试静态变量作用域

		static $static_var01 = 5;  //静态变量,只会在建立的时候初始化一次。

		echo "初始静态变量：$static_var01";
		echo PHP_EOL;

		$static_var01++;

		echo "静态变量加一：$static_var01";
		echo PHP_EOL;


	}

	TestVarStatic();

	TestVarStatic();
?>