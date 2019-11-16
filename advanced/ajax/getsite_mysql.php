<?php
//是否由参数q,如果有，转为int
$q = isset($_GET['q']) ? intval($_GET['q']) : "";

//如果未选择，输出让其选择一个网站
if (empty($q)){
    echo '请选择一个网站';
    exit;
}

echo "<table border='1'>
<tr>
<th>ID</th>
<th>网站名</th>
<th>网站 URL</th>
<th>Alexa 排名</th>
<th>国家</th>
</tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

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
    $conn->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    //sql语句
    $sql = "select * from websites where id = ?";
    //预处理
    $stmt = $conn->prepare($sql);
    //执行查询
    $stmt->execute(array($q));
    //设置结果集为关联数组
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //循环输出
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}catch (PDOException $e){
    echo  iconv('GBK','UTF-8',$e->getMessage());
}

$conn = null;

echo "</table>";




