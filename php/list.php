<!doctype html>
<html>
<head>
<?php
include_once("conn.php");
include_once("function.php");

if(isset($_GET['class'])){
$class=$_GET['class'];
if($class=="x1"){
	$classname="校园动态";	
}else if($class=="x2"){
	$classname="时事聚焦";
}
}else{
	$classname="全部新闻";
} 

?>
<meta charset="utf-8">
<title><?php echo $classname;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/xydt_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="top"></div>
<div class="nav"></div>

<div class="box">
  <div class="sidebar"></div>
    
    <div class="shoolnews">
   	  <ul class="title_xy">
          <h4><?php echo $classname;?></h4>         
          <li><a href="#"><?php echo $classname;?></a></li>
          <li>>></li>
          <li><a href="index.php">首页</a></li>
          <li>您现在的位置：</li>
        </ul>
    	
        <ul class="newss">
        <?php
			if($classname=="全部新闻"){ 
				$str=mysql_query("select * from `news` order by `id` desc");			
			}else{   
				 $str=mysql_query("select * from `news` where classname='".$classname."' order by `id` desc");						
			}
			while($row=mysql_fetch_row($str)){
				 echo '<li><span>'.$row[7].'</span><a href="show.php?class='.$row[0].'">'.cutStr($row[2],60,20).'</a></li>';
			   }	
		
		?>
        
        	
        </ul>
        
        
        </div>
</div>
 
</div>

<div class="foot"></div>

</body>
</html>