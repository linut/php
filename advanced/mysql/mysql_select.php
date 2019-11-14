<?php
echo "<table style='border: solid 1px black;'";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator{
    /**
     * Description: 将数据传输到HTML标签中递归输出
     */
    //构造函数，只输出叶子节点
    function __construct($it)
    {
        parent::__construct($it,self::LEAVES_ONLY);
    }
    function current()//输出当前节点
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current()."</td>";
    }
    function beginChildren()//开始节点
    {
        echo "<tr>";
    }
    function endChildren()//结束节点
    {
        echo "</tr>"."\n";
    }


}

//myDB的数据
$servername = "localhost";
$username = "myDB";
$password = "2aExaRbreEkkJMB4";
$dbname = "myDB";

try{
    //创建连接
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //将PDO错误模式更改为输出异常模式，便于调试
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //预处理SQL语句
    $stmt = $conn->prepare("select id,firstname,lastname from MyGuests");
    //执行语句
    $stmt->execute();

    //设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //循环输出递归的数组
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
        echo $v;
    }

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;

echo "</table>";
?>
