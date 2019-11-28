<?php
/**
 * poll_vote.php
 * 文件描述：利用Ajax实现一个投票程序，通过它，通过它，投票结果在网页不进行刷新的情况下被显示。
 * Created on 2019/11/28 19:44
 * Create by ZhangFeng
 */
//设置cookie，防止重复投票
if(empty($_COOKIE["voted"])) {
    setcookie("voted","yes!",time()+60*60*24*365);
} else {
    die("您已经投过票！");
}

$vote = htmlspecialchars($_REQUEST['vote']);

//获取文件中存储的数据

$filename = "poll_result.txt";
$content = file($filename);

//将数据分割到数组中
$array = explode("||",$content[0]);
$yes = $array[0];
$no = $array[1];

if($vote == 0){
    $yes = $yes + 1;
}

if ($vote == 1){
    $no = $no + 1;
}

//插入投票数据
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>结果：</h2>
<table>
    <tr>
        <td>是：</td>
        <td><span style="display: inline-block; background-color: green;
                width: <?php echo (100*round($yes/$no+$yes,2)); ?>px;
                height: 20px;"></span>
            <?php echo (100*round($yes/($no+$yes),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>否：</td>
        <td><span style="display: inline-block; background-color:red;
                width:<?php echo(100*round($no/($no+$yes),2)); ?>px;
                height:20px;"></span>
            <?php echo(100*round($no/($no+$yes),2)); ?>%
        </td>
    </tr>
</table>