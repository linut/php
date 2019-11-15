<?php
/**
描述：通过配置文件连接数据库，然后创建表格并插入数据。
 */
//解析配置文件
$config = parse_ini_file(realpath(dirname(__FILE__)."/dbconfig.ini"));

//相关参数
$servername = $config['host'];
$port = $config['port'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

try{
    //PDO方式连接数据库
    $conn =new PDO("mysql:host=$servername;port=$port;dbname=$dbname",$username,$password);
    //设置PDO错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //开始事务
    $conn->beginTransaction();
    //创建数据库表语句
    $sql_createtable = "create table websites (
    id int(5) unsigned auto_increment primary key ,
    name varchar (30) not null,
    url varchar (50) not null,
    alexa int(8),
    country varchar (10)
    )";
    //创建表格
    $conn->exec($sql_createtable);

    //预处理SQL,并绑定参数
    $stmt = $conn->prepare("insert into websites (id,name,url,alexa,country) values (:id,:name,:url,:alexa,:country)");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':url',$url);
    $stmt->bindParam(':alexa',$alexa);
    $stmt->bindParam(':country',$country);

    //插入行
    $name = "Google";
    $url = "https://www.google.com/";
    $alexa = 1;
    $country = "USA";
    $stmt->execute();

    $name = "淘宝";
    $url = "https://www.taobao.com/";
    $alexa = 13;
    $country = "CN";
    $stmt->execute();

    $name = "菜鸟教程";
    $url = "http://www.runoob.com/";
    $alexa = 4689;
    $country = "CN";
    $stmt->execute();

    $name = "微博";
    $url = "http://weibo.com/";
    $alexa = 20;
    $country = "CN";
    $stmt->execute();

    //提交事务
    $conn->commit();
    echo "执行成功！";

}catch (PDOException $e){
    //执行失败回滚事务
    $conn->rollBack();
    //输出异常
    echo iconv('GBK','UTF-8',$e->getMessage());
}

$conn = null;