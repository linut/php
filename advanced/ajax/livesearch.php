<?php
/**
 * livesearch.php
 * 文件描述：搜索 XML 文件中匹配搜索字符串的标题，并返回结果.
 * Created on 2019/11/25 17:59
 * Create by ZhangFeng
 */

$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");

$x = $xmlDoc->getElementsByTagName('link');

$q = $_GET['q'];//get parameter

//如果q参数存在则从xml文件中查找数据

if (strlen($q)>0){

    $hint="";

    for ($i=0;$i<($x->length);$i++){
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        if ($y->item(0)->nodeType==1){
            //找到匹配搜索的链接
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)){
                if ($hint==""){
                    $hint="<a href='".
                        $z->item(0)->childNodes->item(0)->nodeValue.
                        "' target='_blank'>".
                        $y->item(0)->childNodes->item(0)->nodeValue.
                        "</a>";
                }else{
                    $hint=$hint."<br /><a href='".
                        $z->item(0)->childNodes->item(0)->nodeValue.
                        "' target='_blank'>".
                        $y->item(0)->childNodes->item(0)->nodeValue.
                        "</a>";
                }
            }
        }
    }
}

//如果没找到则返回 "no suggestion"
if ($hint==""){
    $response = "no suggestion";
}else{
    $response = $hint;
}

//输出结果

echo $response;