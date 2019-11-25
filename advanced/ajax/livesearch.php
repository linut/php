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

