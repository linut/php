<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//打开文件
$file = fopen("fread.txt","r") or exit("Unable to open file!");

//$file = iconv('GBK','UTF-8',$file);
//逐行读取文件内容到最后一行
while(!feof($file)){
	$temp = iconv('GBK','UTF-8',fgets($file));
	
    echo $temp . "<br>";
}

//逐字读取文件，直到文件末尾

while(!feof($file)){
	$temp2 = iconv('GBK','UTF-8',fgetc($file));
    echo $temp2;
}

//关闭文件
fclose($file);
?>
</body>
</html>