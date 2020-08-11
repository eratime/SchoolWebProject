<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请登录再进入");location.href="login.php";</script>';
		exit();
	}	
?>

<body>
<form action="addnewszx.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="467" border="1" align="center">
    <tr>
      <td width="145">新闻标题</td>
      <td width="306"><label for="title"></label>
      <input type="text" name="title" id="title"></td>
    </tr>
    <tr>
      <td>发布者</td>
      <td><input type="text" name="autor" id="autor"></td>
    </tr>
    <tr>
      <td>新闻类别</td>
      <td><label for="classname"></label>
        <select name="classname" id="classname">
          <option value="校园动态">校园动态</option>
          <option value="时事聚焦">时事聚焦</option>
      </select></td>
    </tr>
    <tr>
      <td>缩略图</td>
      <td><label for="thumbnail"></label>
      <input type="file" name="thumbnail" id="thumbnail"></td>
    </tr>
    <tr>
      <td height="47">新闻内容</td>
      <td><label for="content"></label>
      <textarea name="content" id="content"></textarea></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td><a href="../index.php" target="_blank">打开首页查看情况</a></td>
    </tr>
  </table>
</form>
</body>
</html>