<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站后台管理系统</title>
<link href="css/style_system.css" rel="stylesheet" type="text/css">

</head>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请登录再进入");location.href="login.php";</script>';
		exit();
	}	
?>
<body>
<div class="top">网站后台管理系统</div>

<div class="box_lr">
	<div class="left_nav">
      <dl>
        <dt>登录管理</dt>
        <dd><a href="xiugaimima.php"  target="mianb">修改密码</a></dd>
        <dd><a href="adminguanli.php" target="mianb">管理员管理</a></dd>
        
        <dt>新闻管理</dt>
        <dd><a href="main.php" target="mianb">添加新闻</a></dd>
        <dd class="kongge"><a href="newsguanli.php"  target="mianb">管理新闻</a></dd>
        
        <dd><a href="javascript:if(confirm('是否退出登录吗'))location='dltc.php'">退出登录</a></dd>
        <dd><a href="../index.php" target="_blank">返回网站首页</a></dd>
       </dl>
    </div>
    
    <div class="main">
    	<iframe src="main.php" frameborder="0" scrolling="no" width="80%" height="500px" name="mianb"></iframe>
    </div>
</div>

</body>
</html>