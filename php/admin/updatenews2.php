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
$title=$_POST['title'];//标题
$classname=$_POST['classname'];//新闻级别
$autor=$_POST['autor'];//作者
$content=$_POST['content'];//内容
$updatetime=date("Y-m-d");//时间
if(isset($_SESSION['id'])){
			$id=$_SESSION["id"];
			}
if($title=="" || $autor=="" || $content==""){
	echo '<script>alert("请填写完信息");history.back();</script>';	//提示请填写
}else{
	include_once("../conn.php");//连库
	$sql2=mysql_query("select *  from school.news where `title`='".$title."'");//条件是接标题来查库的用户
	$row2=mysql_fetch_row($sql2);
	$sql=mysql_query("select *  from school.news where `id`='".$id."'");//条件是id来查库的新闻	
	if(mysql_num_rows($sql)){//判断新闻标题冲突
		$row=mysql_fetch_row($sql);
		if($row[2]==$title){//判断是传过来的新闻标题和库查出来的是否一致，一致就可以直接改其他信息
			mysql_query("UPDATE  `school`.`news` SET  `classname` =  '".$classname."',`autor` =  '".$autor."',`content`='".$content."',`updatetime`='".$updatetime."' WHERE  `news`.`title`='".$title."'");//执行mysql语句，修改新闻
			echo '<script>alert("修改新闻的其他信息成功");location.href="newsguanli.php";</script>';//修改成功提示
			mysql_close($conn);//关库
		}else if($row[0]=$row2[0]){//不一致，可以认为冲突
			echo '<script>alert("已有这标题新闻，请重新修改新的标题使用");history.back();</script>';	//提示已存在
			mysql_close($conn);//关库
		
		}else{	//没有冲突的情况
		if(isset($_SESSION['id'])){
			$id=$_SESSION["id"];
			mysql_query("UPDATE  `school`.`news` SET  `classname` =  '".$classname."',`autor` =  '".$autor."',`content` =  '".$content."',`title`='".$title."',`updatetime`='".$updatetime."' WHERE  `news`.`id` =".$id."");	
		}	
		echo '<script>alert("新闻标题换新了，修改新闻信息成功，");location.href="newsguanli.php";</script>';//提示成功
		mysql_close($conn);//关库
	}
	}
}
?>
</body>
</html>