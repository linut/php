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

    //预处理SQL并绑定参数
    $stmt = $conn->prepare("insert into MyGuests (firstname,lastname,email)values(:firstname,:lastname,:email)");
    //绑定参数
    $stmt->bindParam(':firstname',$firstname);
    $stmt->bindParam(':lastname',$lastname);
    $stmt->bindParam(':email',$email);

    // 插入行
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();
 
    // 插入其他行
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();
 
    // 插入其他行
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();
 
    echo "新记录插入成功";
}catch(PDOException $e){
    echo "Error:" . $e->getMessage();
}

$conn = null;
?>