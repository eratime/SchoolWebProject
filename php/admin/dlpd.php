<?php session_start();?>
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
$yzm=$_POST["yzm"];//接受验证码
if($username=="" || $password==""){
	 echo '<script>alert("请输入用户名或密码");location.href="login.php";</script>';
}else{
	if(strtolower($yzm)==strtolower($_SESSION["cobe"])){//判断验证码是否一样
		include_once("../conn.php");//连接数据库		
		$sql=mysql_query("select *  from school.user where username='".$username."' and password='".$password."'");//查询库的用户使用
		if(mysql_num_rows($sql)){//判断是否有这个对应的用户			
				  $_SESSION["username"]=$username;
		  
			  echo '<script>alert("登录成功");location.href="system.php";</script>';
		  }else{
			  echo '<script>alert("登录失败，请输入正确的用户名或密码");location.href="login.php";</script>';
		  }	
  }else{
		  echo '<script>alert("验证码不正确");location.href="login.php";</script>';
  }
}

	   
	   		

?>
</body>
</html>
<?php
mysql_close($conn);
?>