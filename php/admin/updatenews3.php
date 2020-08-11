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

$id=$_SESSION['id'];//创建id会话
include_once("../conn.php");//连库
$sql=mysql_query("select *  from school.news where `id`=".$id."");//查询库的用户使用
$row=mysql_fetch_row($sql);
?>
<form name="form1" method="post" enctype="multipart/form-data" action="updatenews4.php">
  <table width="625" border="1" align="center">
    <tr>
      <td height="30" colspan="2" align="center" bgcolor="#CCCCCC">新闻信息编辑-添加缩略图</td>
    </tr>
    <tr>
      <td width="143" height="30" align="right" valign="middle">标题：</td>
      <td width="466" height="30"><label for="title"></label>
      <?php echo '<input type="text" name="title" id="title" value="'.$row[2].'">';?>
      </td>
    </tr>
    <tr>
      <td height="30" align="right" valign="middle">新闻类别：</td>
      <td height="30"><select name="classname" id="classname">
      <?php
      if($row[1]=="校园动态"){
		  echo '<option value="校园动态">校园动态</option>
        <option value="时事聚焦">时事聚焦</option>';
		}else{
			 echo '<option value="时事聚焦">时事聚焦</option>
        <option value="校园动态">校园动态</option>';
		}
	  ?>
        
      </select></td>
    </tr>
    <tr>
      <td height="30" align="right" valign="middle">作者：</td>
      <td height="30"><label for="autor"></label>
      <?php echo '<input type="text" name="autor" id="autor" value="'.$row[3].'">';?>
      </td>
    </tr>
    <tr>
      <td height="30" align="right" valign="middle">缩略图：</td>
      <td height="30">
     <label for="thumbnail"></label>
      <input type="file" name="thumbnail" id="thumbnail">
      </td>
    </tr>
    
    <tr>
      <td height="30" align="right" valign="middle">内容：</td>
      <td height="100"><label for="content"></label>
      <?php  echo '<textarea name="content" id="content">'.$row[4].'</textarea>';?>
      </td>
    </tr>
     <tr>
      <td height="30" colspan="2" align="center"><input type="submit" name="button" id="button" value="确认修改"></td>
    </tr>
  </table> 
</form>
</body>
</html>
<?php
mysql_close($conn);
?>