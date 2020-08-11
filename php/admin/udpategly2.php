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
$username=$_POST["username"];//接收用户
$password=$_POST["password"];//接收密码
$level=$_POST["level"];//接收级别
if(isset($_SESSION['id'])){
			$id=$_SESSION["id"];
			}
if($username=="" || $password==""){
	echo '<script>alert("请填写管理员名称或密码");history.back();</script>';	//提示请填写
}else{
	include_once("../conn.php");//连库
	$sql2=mysql_query("select *  from school.user where `username`='".$username."'");//条件是接收用户名称来查库的用户
	$row2=mysql_fetch_row($sql2);
	$sql=mysql_query("select *  from school.user where `id`='".$id."'");//条件是id来查库的用户	
	if(mysql_num_rows($sql)){//判断用户名冲突
		$row=mysql_fetch_row($sql);
		if($row[1]==$username){//判断是传过来的用户名和库查出来的是否一致，一致就可以直接改其他信息
			mysql_query("UPDATE  `school`.`user` SET  `password` =  '".$password."',`adminlevel` =  '".$level."' WHERE  `user`.`username`='".$username."'");//执行mysql语句，更新管理员用户
			echo '<script>alert("修改管理员的其他信息成功");location.href="adminguanli.php";</script>';//修改成功提示
			mysql_close($conn);//关库
		}else if($row[0]=$row2[0]){//不一致，可以认为冲突,输入的名称查出来的id和原来id相等就是冲突
			echo '<script>alert("新修改的用户名称已有该用户存在，请重新修改新的用户名称使用");history.back();</script>';	//提示已存在
			mysql_close($conn);//关库
		}else{	//没有冲突的情况
		if(isset($_SESSION['id'])){
			$id=$_SESSION["id"];
			mysql_query("UPDATE  `school`.`user` SET  `username` =  '".$username."',`password` =  '".$password."',`adminlevel` =  '".$level."' WHERE  `user`.`id` =".$id."");	
		}	
		echo '<script>alert("管理员名字换新了，修改管理员信息成功，");location.href="adminguanli.php";</script>';//提示成功
		mysql_close($conn);//关库
		}
	}
}
?>

</body>
</html>