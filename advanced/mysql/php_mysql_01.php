<?php
//连接Mysql
//MySQLi连接方式
$servername = "localhost";
$username = "root";
$password = "ATPbdAN3T5dZzWK2";//密码已更换：）

//创建连接
$conn = mysqli_connect($servername,$username,$password);

//检测连接
if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}else{
    echo "连接成功";
}
//关闭连接
$conn->close();
//或者mysqli_close($conn);


//PDO连接方式
echo "<br>";

try{
    $conn2 = new PDO("mysql:host=$servername;",$username,$password);
    echo "连接成功";
}catch(PDOException $e){
    echo $e->getMessage();
}
//关闭连接
$conn = null;

//通过配置文件来连接数据库
try{
    //解析dbconfig.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/dbconfig.ini'));
    //对mysqli类进行实例化
    $mysqli = new mysqli($config['host'],$config['username'],$config['password'],$config['dbname']);
    if(mysqli_connect_errno()){//判断是否成功连上Mysql数据库
            throw new Exception('数据库连接错误！');//如果连接错误，则抛出异常
    }else{
        echo '数据库连接成功！';//打印连接成功的提示
    }
}catch(Exception $e){//捕获异常
    echo $e->getMessage();//打印异常信息
}
?>