<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(!is_dir("uplode")){
	mkdir("uplode");	
};
$upload=$_FILES["tupian"];
$geshi=array("jpg","png","gif");
$kzm=strtolower(substr(strrchr($upload["name"],"."),1));
if(! in_array($kzm,$geshi)){
	echo "错误，格式不对，只能上穿jpg,png,gif格式文件";
}else{
  	$wjm="IMG".date("Ymdhis").rand(1000,9999).".".$kzm;
  	if($upload["size"]>2000000){
		echo "错误，文件过大";
	}else{
		$lujing="uplode/".$wjm;	
		$i=move_uploaded_file($upload["tmp_name"],$lujing);
		if(!is_uploaded_file($i)){
			echo "成功";
		}else{
			echo "失败";
		} 
	}
	 
}	  	
?>
</body>
</html>