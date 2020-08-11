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
<title>添加新闻</title>
<?php 
include_once("../conn.php");
include_once("../function.php");
 ?>
</head>

<body>
<?php
$title=$_POST['title'];
$autor=$_POST['autor'];
$classname=$_POST['classname'];
$content=$_POST['content'];
$updatetime=date("Y-m-d");
if($title=="" || $autor=="" || $content==""){//大判断是否为空
	echo '<script>alert("填写完整所有内容");history.back();</script>';	//提示请填写
}else{
	/*创建文件夹*/
	if(! is_dir("../upload") ){
		mkdir("../upload");
	}
	/*上传图片*/
	$geshi=array("jpg","png","gif");
	$upload=$_FILES['thumbnail'];
	$kzm=strtolower(substr(strrchr($upload["name"],"."),1));
	 if(!in_array($kzm,$geshi)){
		echo '<script>alert("文件类型不符合,只能上传jpg,png,gif格式文件");history.back();</script>';
	}else{
		$wjm="IMG".date("Ymdhis").rand(1000,9999).".".$kzm;
		if($upload['size']>1000000){
			echo '<script>alert("文件过大");history.back();</script>';
		}else{
			$lujing="../upload/".$wjm;
			$i=move_uploaded_file($upload["tmp_name"],$lujing);	
		}
	}
	/*连接数据库上传数据*/
	$sql=mysql_query("insert into `school`.`news`(`classname`,`title`,`autor`,`content`,`thumbnail`,`updatetime`)values('".$classname."','".$title."','".$autor."','".$content."','".$lujing."','".$updatetime."')");
	if($sql){
		echo '<script>alert("添加成功");location.href="main.php";</script>';
	}else{
		echo '<script>alert("添加失败");history.back();</script>';
	}
}
?>

</body>
</html>
