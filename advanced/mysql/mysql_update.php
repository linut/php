<?php
/**
 * 描述：更新myDB数据库表中的数据
 * 要求：
 * 1. 从数据库配置文件中读取数据库相关信息
 * 2. 用PDO方式连接MySQL数据库
 * 3. 预处理数据
 * 4. 事务管理
 */

 try{
     //配置文件中读取数据库信息
     $config = parse_ini_file(realpath(dirname(__FILE__))."/config/dbconfig.ini");
     $servername = $config['host'];//主机名
     $username = $config['username'];//用户名
     $password = $config['password'];//数据库密码
     $dbname = $config['dbname'];//数据库名称

     //用PDO方式连接MySQL数据库
     $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
     //将PDO错误模式设置为异常
     $conn->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);

     //开始事务
     $conn->beginTransaction();
     //SQL语句
     $sql = "update MyGuests set email='fenzang@test.com' where firstname='zhang' and lastname='feng'";
     //预处理
     $stmt=$conn->prepare($sql);
     //执行语句
     $stmt->execute();
     //提交事务
     $conn->commit();
     echo "数据更新成功！";

 }catch(PDOException $e){
     $conn->rollBack();//事务回滚
     echo "Error:" . $e->getMessage();
 }

$conn = null ;
?>