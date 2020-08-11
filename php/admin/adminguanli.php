<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请登录再进入");location.href="login.php";</script>';
		exit();
	}	
?>
<?php
include_once("../conn.php");
?>
</head>

<body>
<table width="687" border="1" align="center">
  <tr>
    <td height="30" colspan="4" align="center" bgcolor="#CCCCCC"><strong>管理员管理</strong></td>
  </tr>
  <tr>
    <td width="165" height="30" align="center"><strong>管理员名称</strong></td>
    <td width="292" height="30" align="center"><strong>管理员级别</strong></td>
    <td width="208" height="30" colspan="2" align="center"><strong>管理</strong></td>
  </tr>
<?php
	
	$admins=mysql_query("select * from `user` order by 'id' desc");
	while($row=mysql_fetch_row($admins)){
		echo '<tr>';
		echo '<td height="30" align="center">'.$row[1].'</td>';
		echo '<td height="30" align="center">'.$row[3].'</td>';
		echo '<td height="30" align="center"><a href="updategly.php?id='.$row[0].'">编辑</a></td>';
		$jstext="javascript:if(confirm('确认是否删除吗'))location='deleteguanliyuan.php?id=".$row[0]."'";//js提示代码赋值在一个变量
		echo '<td align="center"><a href="'.$jstext.'">删除</a></td>';
		echo '</tr>';		   
	}
?>  
</table>
<hr>
<form name="form1" method="post" action="addgadmin.php">
<table width="485" border="1" align="center">
  <tr>
    <td height="30" colspan="2" align="center" bgcolor="#CCCCCC"><strong>添加管理员</strong></td>
    </tr>
  <tr>
    <td width="151" height="30" align="center">管理员名称：</td>
    <td width="318" height="30"><label for="username"></label>
      <input type="text" name="username" id="username"></td>
    </tr>
  <tr>
    <td height="30" align="center">管理员密码：</td>
    <td height="30"><label for="username"></label>
      <input name="password" type="text" id="password" value="0000"></td>
    </tr>
  <tr>
    <td height="30" align="center">管理员级别：</td>
    <td height="30"><label for="level"></label>
      <select name="level" id="level">
        <option value="超级管理员">超级管理员</option>
        <option value="一般管理员">一般管理员</option>
      </select></td>
    </tr>
  <tr>
    <td height="30" align="center">&nbsp;</td>
    <td height="30"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
</table>

</form>


</body>
</html>
<?php
mysql_close($conn);
?>