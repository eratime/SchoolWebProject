<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$password=$_POST["zmm"];//接收旧密码
$xmm=$_POST["xmm"];//接收新密码
$username=$_SESSION["username"];//接收用户名

if($password=="" || $xmm==""){
	 echo '<script>alert("请输入旧密码或新密码");history.back();</script>';
}else{
	
	include_once("../conn.php");
	$sql=mysql_query("select *  from school.user where username='".$username."' and password='".$password."'");//查询库的用户使用
	if(mysql_num_rows($sql)){	
		$sql2=mysql_query("UPDATE  `school`.`user` SET  `password` =  '".$xmm."' WHERE  `user`.`username` ='".$username."'");
		if($sql2){
			echo '<script>alert("修改密码成功");location.href="xiugaimima.php";</script>';
		}else{
			echo '<script>alert("修改密码失败");history.back();</script>';
		}
		
		mysql_close($conn);
	}else{
		echo '<script>alert("旧密码不正确");history.back();</script>';
	}	
}
?>
</body>
</html>