<?php

//整数过滤器
$int = 123;
if(!filter_var($int,FILTER_VALIDATE_INT)){
    echo "不是一个合法的整数";
}else{
    echo "是一个合法的整数" . "<br>";
}
//查看过滤器的输出
var_dump(filter_var($int,FILTER_VALIDATE_INT));
echo "<br>";

//if后面的条件语句，如果是0、""、null、false,不执行或者执行else，否则为true.
if(-1){
	echo "条件是整数" ."<br>";
}else{
	echo "false" . "<br>";
}

//过滤器选项和标志
//过滤范围内的整数
$var  = 300;

$int_options = array(
    "options" => array(
        "min_range" => 0,
        "max_range" => 256
    )
);

if(filter_var($var,FILTER_VALIDATE_INT,$int_options)){
    echo "合法整数" . "<br>";
}else{
    echo "非法整数" . "<br>";
}

//利用过滤器验证输入
//1. 验证是否有输入
if(!filter_has_var(INPUT_GET,"email")){
    echo "没有email参数";
//2. 验证是否是合法的输入
}else if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
    echo "合法的Email地址" . "<br>";
}else{
    echo "非法Email地址！" . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Filter</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        Email: <input type="text" name="email" id="ema01">
        <input type="submit" value="提交">
    </form>
</body>
</html>