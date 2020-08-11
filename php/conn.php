<?php
$conn=mysql_connect("localhost","root","")or die("数据库连接失败".mysql_error());
$db=mysql_select_db("school",$conn);
mysql_query("set names utf8");
?>