<!doctype html>
<html>
<head>
<?php 
$id=$_GET["class"];
include_once("conn.php");
$sql=mysql_query("select * from `news` where id=".$id."");
$row=mysql_fetch_row($sql);
$row[6]++;
$upsql=mysql_query("update `news` set hits='".$row[6]."' where id=".$id."");
 ?>
<meta charset="utf-8">
<title><?php $row[2];?></title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/xydt_style.css" rel="stylesheet" type="text/css">
<link href="css/ge_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="top"></div>
<div class="nav"></div>

<div class="box">
  <div class="sidebar"></div>
    
    <div class="shoolnews">
   	  <ul class="title_xy">
          <h4><?php $row[1];?></h4>         
          <li><a href="#"><?php echo $row[1];?></a></li>
          <li>>></li>
          <li><a href="index.php">首页</a></li>
          <li>您现在的位置：</li>
        </ul>
        
        <div class="dantiao_nr">
          <h2><?php $row[2];?></h2>
          <div class="title_fbz">
              <span class="djs">点击数：<?php echo $row[6];?></span><span class="fbz">发布者：<?php echo $row[3];?></span><span>时间：<?php echo $row[7];?></span>           
          </div>
          
          <div class="news_nrs">
          	<?php
			if($row[5]){
				 echo '<img src="'.$row[5].'" class="nrs_tu">'; 
			 
				}
			
			 ?>
          	
          	<?php echo $row[4];?>
             </div>
          
        </div>
    </div>
</div>
 
</div>

<div class="foot"></div>

</body>
</html>
<?php
mysql_close($conn);
?>