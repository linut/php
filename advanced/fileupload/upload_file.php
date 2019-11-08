<?php

//允许上传的图片后缀,是否区分大小写
$allowedExts = array("gif","jpeg","jpg","png");
$temp = explode(".",$_FILES["file"]["name"]);//按照“.”把文件名分为数组
$extension = strtolower(end($temp));//获取文件后缀名,并设置为小写。

if(
    !((
        ($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png")
    )
    && in_array($extension,$allowedExts))
){
    echo "非法的文件格式";
}else if(($_FILES["file"]["size"] > 307200)   ){// 小于 300 kb
    echo "文件大于300KB";
}else{
    if($_FILES["file"]["error"] > 0){
        echo "上传出错：" . $_FILES["file"]["error"] . "<br>"; 
    }else{
        echo "上传文件名：" . $_FILES["file"]["name"] . "<br>";
        echo "文件类型：" . $_FILES["file"]["type"] . "<br>";
        echo "文件大小：" . $_FILES["file"]["size"] / 1024 . "kB<br>";
        echo "文件临时存储的位置：" . $_FILES["file"]["tmp_name"] . "<br>";

        //判读当期目录下的upload目录是否存在该文件
        //如果没有upload目录，你需要创建它，目录权限为777
        if(file_exists("upload/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . "文件已经存在。";
        }else{
            //如果upload目录不存在该文件，则创建文件夹，并将该文件上传到upload目录下
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);

            echo "文件存储在：" . "upload/" . $_FILES["file"]["name"];
        }
    }
}

?>