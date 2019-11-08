<?php

session_start();
//浏览量计数器
if(isset($_SESSION['views'])){
    $_SESSION['views'] += 1;
}else{
    $_SESSION['views'] = 1;
}
//清除session
if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}

echo "浏览量：" . $_SESSION['views'];
?>