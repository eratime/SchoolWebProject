<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
 	setcookie("username","",time()-1);
	
	echo '<script>alert("已安全退出");location.href="login.php";</script>';
?>
</body>
</html>