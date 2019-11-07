<?php
/**
 * 描述：用php获取表单提取的数据，并输出。
 */
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

if($q) {
    if($q == 'PHPRADIO01'){
        echo 'PHPRADIO01' . '<br>';
    }else if($q == 'PHPRADIO02'){
        echo 'PHPRADIO02' . '<br>';
    }else if($q == 'PHPRADIO03'){
        echo 'PHPRADIO03' . '<br>';
    }
}else {
?>
    <form action="" method="get">
        <input type="radio" name="q" id="rad01" value="PHPRADIO01">PHPRADIO01
        <input type="radio" name="q" id="rad02" value="PHPRADIO02">PHPRADIO02
        <input type="radio" name="q" id="rad03" value="PHPRADIO03">PHPRADIO03
        <input type="submit" value="提交">
    </form>

<?php 
}
?>

