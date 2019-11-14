<?php
//myDB的数据
$servername = "localhost";
$username = "myDB";
$password = "2aExaRbreEkkJMB4";
$dbname = "myDB";

try{
    //创建连接
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //设置PDO错误模式为，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //开始事务
    $conn->beginTransaction();
    //SQL语句
    $conn->exec("insert into MyGuests (firstname,lastname,email)values('John','Doe','john@example.com')");
    $conn->exec("insert into MyGuests (firstname,lastname,email)values('Mary','Moe','mary@example.com')");
    $conn->exec("insert into MyGuests (firstname,lastname,email)values('Julie','Dooley','julie@example.com')");

    //提交事务
    $conn->commit();
    echo "新记录插入成功";
}catch(PDOException $e){
    //如果执行失败回滚
    $conn->rollBack();
    echo $sql . "<br>" .$e->getMessage();
}

$conn = null;

?>