<?php
$q = isset($_GET['q']) ? $_GET['q'] : '';
//var_dump($q);//测试方法htmlspecialchars()输出什么。
switch($q){
    case 'GOOGLE':
        echo "www.google.com";
        break;
    case 'BAIDU':
        echo "www.baidu.com";
        break;
    case 'TAOBAO':
        echo "www.taobao.com";
        break;
}
?>

<form action="" method="GET">
    <select name="q">
        <option value="">选择一个站点：</option>
        <option value="GOOGLE">www.google.com/</option>
        <option value="BAIDU">www.baidu.com/</option>
        <option value="TAOBAO">www.taobao.com</option>
    </select>
    <input type="submit" value="提交">
</form>

<?php
$str = 'I love "PHP".';
echo $str,"<br>";
echo htmlspecialchars($str, ENT_QUOTES); // 转换双引号和单引号，将部分字符转换为HTML实体
?>
