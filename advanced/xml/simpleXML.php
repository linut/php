<?php
/**
 * simpleXML.php
 * 文件描述：利用SimpleXML函数处理简单的XML任务。
 * Created on 2019/11/25 11:06
 * Create by ZhangFeng
 */

$xml = simplexml_load_file("note.xml");//load files

print_r($xml);//print SimpleXMLElement Object

echo "<br>";

//output text of each elements.

echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body . "<br>";

//output element name and data of each childnode.

echo $xml->getName()."<br>";//output name

foreach ($xml->children() as $child) {
    echo $child->getName() . " : " . $child . "<br>";
}