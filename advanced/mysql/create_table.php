
<?php
//连接MySQL,并创建数据库
try{
    //解析配置文件
    $config = parse_ini_file(realpath(dirname(__FILE__).'/config/dbconfig.ini'));
    //从配置文件中取数据
    $servername = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $dbname = "mydb";
    //创建连接
    $conn = new PDO("mysql:host=$servername;port=3316;dbname=$dbname",$username,$password);
    //将PDO错误模式设为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // //创建数据库SQL语句
    // $sql = "CREATE DATABASE myDB";
    
    
    //使用sql创建数据表
    $sql = "create table MyGuests (
        id int(6) unsigned auto_increment primary key,
        firstname varchar(30) not null,
        lastname varchar(30) not null,
        email varchar(50),
        reg_date timestamp
    )";

    //执行语句
    $conn->exec($sql);
    echo "数据表MyGuests创建成功"; 

}catch(PDOException $e){
    echo "<br>" .$e->getMessage();
    //windows下会出现乱码
    echo iconv('gbk', 'utf-8', $e->getMessage());
}
$conn = null;
?>

