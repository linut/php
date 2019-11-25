<?php
/**
 * DOMParser.php
 * 文件描述：通过基于树的解析器--DOM解析器解析XML文件
 * Created on 2019/11/25 8:19
 * Create by ZhangFeng
 */

$xmldoc = new DOMDocument();//create DOM object

$xmldoc->load("note.xml");//load xml file

print $xmldoc->saveXML();//print text of the xml file by string.

echo "<br>";

$x = $xmldoc->documentElement;//recursive traversal of xml-document tree.递归遍历xml文档树

foreach ($x->childNodes as $item){//print each node of the documentElement
    print $item->nodeName . " = " . $item->nodeValue . "<br>" ;
}
