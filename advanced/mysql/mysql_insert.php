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
    //sql插入数据
    $sql = "insert into MyGuests (firstname,lastname,email) values('zhang','feng','zhangfeng@test.com')";
    //执行语句
    $conn->exec($sql);
    echo "新记录插入成功";
}catch(PDOException $e){
    echo $sql . "<br>" .$e->getMessage();
}

$conn = null;

?>