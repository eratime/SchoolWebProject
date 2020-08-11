<!doctype html>
<html>
<head>
<?php 
include_once("conn.php");
include_once("function.php");
 ?>
<meta charset="utf-8">
<title>河源技师学院</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.4.js"></script>
<script>
$(function(){
	$("#btnid1").mousemove(function(){
		$("#btnid1").removeClass("btn1");
		$("#btnid1").addClass("btn2");	
		
		$("#btnid2").removeClass("btn2");
		$("#btnid2").addClass("btn1");
		
		$(".xxdt").show();
		$(".ssjj").hide();
	})
	
	$("#btnid2").mousemove(function(){
		$("#btnid2").removeClass("btn1");
		$("#btnid2").addClass("btn2");	
		
		$("#btnid1").removeClass("btn2");
		$("#btnid1").addClass("btn1");
		
		$(".ssjj").show();
		$(".xxdt").hide();
	})
	
})
</script>
</head>

<body>
<div class="top"></div>
<div class="nav"></div>

<div class="box">
	<div class="tongzhigonggao"></div>
    
    <div class="banner_news">
    
    	<div class="banner"></div>
        
    	<div class="news_box">        
        	<div class="title_news">
            	<ul>
                	<h4>新闻中心</h4>
                	<li class="btn1" id="btnid1"><a href="list.php?class=x2" id="qqqq">时事聚焦</a></li>
                    <li class="btn2" id="btnid2"><a href="list.php?class=x1" id="qqqq2">校园动态</a></li>
                </ul>
 		    </div>
            
          <ul class="nr xxdt" style="display:none">
          <?php
          	 $str2=mysql_query("select * from `news` where classname='时事聚焦' order by `id` desc limit 7");
			 while($row=mysql_fetch_row($str2)){
			   echo '<li><span>'.$row[7].'</span><a href="show.php?class='.$row[0].'">'.cutStr($row[2],20,10).'</a></li>';
			 }
		  ?>
                        
                </ul>
           <ul class="nr ssjj" >
           <?php
           $str=mysql_query("select * from `news` where classname='校园动态' order by `id` desc limit 7");
		   $row=mysql_fetch_row($str);
		   echo '<li class="shou1"><a href="show.php?class='.$row[0].'">'.cutStr($row[2],20,10).'</a></li>';
		   while($row=mysql_fetch_row($str)){
			   echo '<li><span>'.$row[7].'</span><a href="show.php?class='.$row[0].'">'.cutStr($row[2],30,10).'</a></li>';
			 }
		   
		   ?>
                         
                </ul>
        </div>
   </div>   
   
   <div class="banner2"></div>
   
   <div class="xxt"></div>
   <div class="jwky"></div>
   <div class="xxsp"></div>
   <div class="zs"></div>
   
   <div class="zhuanye"></div>
</div>

<div class="foot"></div>

</body>
</html>
<?php
mysql_close($conn);
?>