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
<form action="xgmmpd.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="438" border="1" align="center">
    <tr>
      <td height="30" colspan="2" align="center" bgcolor="#CCCCCC"><strong>修改密码</strong></td>
    </tr>
    <tr>
      <td width="90" height="30">旧密码：</td>
      <td width="332" height="30"><label for="zmm"></label>
      <input type="password" name="zmm" id="zmm"></td>
    </tr>
    <tr>
      <td height="30">新密码：</td>
      <td height="30"><label for="xmm"></label>
      <input type="password" name="xmm" id="xmm"></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td height="30"><input type="submit" name="button" id="button" value="确认修改"></td>
    </tr>
  </table>
</form>
</body>
</html>