<?php
//创建一个有异常处理的函数
function checkNum($number){
    if($number > 1){
        throw new Exception("变量必须小于1");
    }
    return true;
}

//在try块 触发异常

try{
    checkNum(2);
    echo '如果输出该内容，说明$number变量小于等于1';
}
//捕获异常
catch(Exception $e){
    echo 'Message:' . $e->getMessage()."<br>";
}

try{
    checkNum(1);
    echo '如果输出该内容，说明$number变量小于等于1';
}
//捕获异常
catch(Exception $e){
    echo 'Message:' . $e->getMessage()."<br>";
}


?>