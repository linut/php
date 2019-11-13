<?php
//从配置文件连接数据库
try{
    //解析dbconfig.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/dbconfig.ini'));
    //对mysqli类进行实例化
    $conn = new mysqli($config['host'],$config['username'],$config['password']);
    if(mysqli_connect_errno()){//判断是否成功连上Mysql数据库
            throw new Exception('数据库连接错误！');//如果连接错误，则抛出异常
    }else{
        echo '数据库连接成功！<br>';//打印连接成功的提示
    }
}catch(Exception $e){//捕获异常
    echo $e->getMessage();//打印异常信息
}

$sql = "CREATE DATABASE myDB";

if($conn->query($sql) === true){
    echo "数据库创建成功！<br>";
}else{
    echo "Error creating database: ". $conn->error;
}

$conn->close();

try{
	$host = $config['host'];
    $conn2 = new PDO("mysql:host=$host",$config['username'],$config['password']);
    //设置PDO错误模式为异常
    $conn2->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    //使用exec(),因为没有返回结果
    $conn2->exec($sql);
    echo "数据库创建成功<br>";
}catch(PDOException $e){
    echo $sql ."<br>".$e->getMessage();
}

$conn2 = null;
?>