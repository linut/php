<?php
try{
    //解析配置文件
    $config = parse_ini_file(realpath(dirname(__FILE__).'/config/dbconfig.ini'));
    //从配置文件中取数据
    $servername = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $dbname = $config['dbname'];
    //创建连接
    $conn = new PDO("mysql:host=$servername;port=3316;dbname=$dbname",$username,$password);
    //将PDO错误模式设为异常
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