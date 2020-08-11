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
$id=$_GET['id'];//接收id
$_SESSION['id']=$id;//创建id会话
include_once("../conn.php");//连库
$sql=mysql_query("select *  from school.user where `id`=".$id."");//查询库的用户使用
$row=mysql_fetch_row($sql);
?>
<form name="form1" method="post" action="udpategly2.php">
  <table width="332" border="1" align="center">
    <tr>
      <td height="30" colspan="2" align="center" bgcolor="#CCCCCC">修改管理员信息</td>
    </tr>
    <tr>
      <td width="106" height="30">用户名：</td>
      <td width="210" height="30"><label for="textfield"></label><?php echo '<input name="username" type="text" id="username" value="'.$row[1].'">';?>
      </td>
    </tr>
    <tr>
      <td height="30">密码：</td>
      <td height="30"><label for="textfield2"></label><?php echo '<input type="text" name="password" id="password" value="'.$row[2].'">';?>
      </td>
    </tr>
    <tr>
      <td height="30">类别</td>
      <td height="30"><select name="level" id="level">
      <?php 
	  if($row[3]=="超级管理员"){
			echo '<option value="超级管理员">超级管理员</option>
        <option value="一般管理员">一般管理员</option>';  
		}else{
			echo '<option value="一般管理员">一般管理员</option><option value="超级管理员">超级管理员</option>';	
		}
	  ?>
      </select></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td height="30"><input type="submit" name="button" id="button" value="确认修改"></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td height="30"><a href="adminguanli.php">取消修改，返回</a></td>
    </tr>
  </table>
</form>
</body>
</html>
