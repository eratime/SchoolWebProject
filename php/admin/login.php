<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站后台登录</title>
<style type="text/css">
.yzm {
	color: #FFF;
	background-color: #666;
	padding: 5px;
	margin-left: 10px;
}
</style>
</head>

<body>
<form name="form1" method="post" action="dlpd.php">
  <table width="523" border="1" align="center">
    <tr>
      <th height="30" colspan="2" align="center" bgcolor="#CCCCCC"><strong>网站后台管理系统</strong></th>
    </tr>
    <tr>
      <td width="93" height="30">用户名：</td>
      <td width="414" height="30"><label for="username"></label>
      <input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <td height="30">密码：</td>
      <td height="30"><label for="password"></label>
      <input type="text" name="password" id="password"></td>
    </tr>
    <tr>
      <td height="30" >验证码：</td>
      <td height="30"><label for="jzmm"></label>
      <input name="yzm" type="text" id="jzmm" size="10" maxlength="4"><span class="yzm"><i>
      <?php
            	$i=array(1,2,3,4,6,7,8,9,0,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","v","u","w","t");
				shuffle($i);
				$cobe=$i[0].$i[1].$i[2].$i[3];
				echo $cobe;
				$_SESSION["cobe"]=$cobe;
			?>
      
      </i></span><a href="?">看不清楚，换一张</a></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td height="30"><input type="submit" name="button" id="button" value="登录"></td>
    </tr>
  </table>
</form>
</body>
</html>