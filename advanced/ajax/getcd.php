<?php
/**
 * getcd.php
 * 文件描述：PHP 脚本加载 XML 文档，"cd_catalog.xml"，运行针对 XML 文件的查询，并以 HTML 返回结果。
 * Created on 2019/11/25 12:04
 * Create by ZhangFeng
 */

$q=$_GET['q'];//get parameter.

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');


for ($i=0;$i<=$x->length-1;$i++){
    //找到提供参数所在元素节点的父元素
    if ($x->item($i)->nodeType==1){
        if($x->item($i)->childNodes->item(0)->nodeValue == $q){
            $y = ($x->item($i)->parentNode);
        }
    }
}

$cd = ($y->childNodes);

for ($i=0;$i<$cd->length;$i++){
    //将所找到的所有父元素下子元素输出
    if ($cd->item($i)->nodeType==1){
        echo ("<b>" . $cd->item($i)->nodeName . ":</b>");
        echo ($cd->item($i)->childNodes->item(0)->nodeValue);
        echo ("<br>");
    }
}
