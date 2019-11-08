<?php
//设置了cookie，第一次访问是普通访客，再次刷新页面是拥有cookie的客户，等36秒时间过后又是普通访客
setcookie("user","feng",time()+36);

?>

<?php
if(isset($_COOKIE['user'])){
    echo "欢迎" . $_COOKIE['user'] . "!<br>";
}else{
    echo "普通访客！<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>北京欢迎你！</h1>
</body>
</html>