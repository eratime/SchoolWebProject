<?php session_start();?>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请登录再进入");location.href="login.php";</script>';
		exit();
	}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=$_POST["username"];//接收用户名
$password=$_POST["password"];//接收密码
$level=$_POST["level"];//接收级别
if($username=="" || $password==""){
	echo '<script>alert("请填写管理员名称或密码");history.back();</script>';	//提示请填写
}else{
	include_once("../conn.php");//连库
	$sql=mysql_query("select *  from school.user where username='".$username."'");//查询库的用户
	if(mysql_num_rows($sql)){
		echo '<script>alert("已有该用户名称，请重新创建新的用户名称");history.back();</script>';	//提示已存在
		mysql_close($conn);//关库
	}else{
		mysql_query("INSERT INTO  `school`.`user` (`username` ,`password` ,`adminlevel`)VALUES ('".$username."',  '".$password."',  '".$level."')");//添加管理员。执行mysql语句
		echo '<script>alert("添加管理员成功");location.href="adminguanli.php";</script>';//提示添加成功
		mysql_close($conn);//关库
	}
}
?>
</body>
</html>
