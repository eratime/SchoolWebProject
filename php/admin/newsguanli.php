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
<?php 
include_once("../conn.php");
include_once("../function.php");
$sql=mysql_query("select * from `news` order by 'id' desc");
$maxrows=mysql_num_rows($sql);
$pagesize=5;
$maxpage=ceil($maxrows/$pagesize);
if(isset($_GET['page'])){
	$page=$_GET['page'];	
}else{
	$page=1;
}
$start=$pagesize*($page-1);
$sql2=mysql_query("select * from `news` order by `id` desc limit $start,$pagesize");
 ?>
<link href="css/style_guanlinews.css" rel="stylesheet" type="text/css">
</head>

<body>
<ul class="ti">
	<li>共<?php echo $maxrows;?>条记录</li>
    <li>每页<?php echo $pagesize;?>条记录</li>
    <li>共<?php echo $maxpage?>页</li>
    <li>当前为第<?php echo $page;?>/<?php echo $maxpage;?>页</li>
</ul>

<table width="1140" border="1">
  <tr>
    <td width="65" align="center">序号</td>
    <td width="116" align="center">类别</td>
    <td width="275" align="center">标题</td>
    <td width="308" align="center">内容</td>
    <td width="171" align="center">更新时间</td>
    <td width="81" align="center">编辑</td>
    <td width="78" align="center">删除</td>
  </tr>
<?php
	while($row=mysql_fetch_row($sql2)){
		if($row[5]==null){
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".cutStr($row[2],20,10)."</td>";
			echo "<td>".cutStr($row[4],20,10)."</td>";
			echo "<td>".$row[7]."</td>";
			echo '<td align="center"><a href="updatenews.php?id='.$row[0].'">编辑</a></td>';
			$jstext="javascript:if(confirm('确认是否删除吗'))location='deletenews.php?id=".$row[0]."'";//js提示代码赋值在一个变量
			echo '<td align="center"><a href="'.$jstext.'">删除</a></td>';
		}else{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".cutStr($row[2],20,10)."<span>[图文]</span></td>";
			echo "<td>".cutStr($row[4],20,10)."</td>";
			echo "<td>".$row[7]."</td>";
			echo '<td align="center"><a href="updatenews.php?id='.$row[0].'">编辑</a></td>';
			$jstext="javascript:if(confirm('确认是否删除吗'))location='deletenews.php?id=".$row[0]."'";//js提示代码赋值在一个变量
			echo '<td align="center"><a href="'.$jstext.'">删除</a></td>';	
		}
		
	}

?>  
  


</table>


<div class="page">
<?php
	if($page>1){
		$prepage=$page-1;
		echo "<span><a href='?'>首页</a></span><span><a href='?page=".$prepage."'>上一页</a></span>";	
	}else{
		echo "<span>首页</span><span>上一页</span>";
	}
	
	if($page<$maxpage){
		$nextpage=$page+1;
		echo "<span><a href='?page=".$nextpage."'>下一页</a></span><span><a href='?page=".$maxpage."'>尾页</a></span>";	
	}else{
		echo "<span>下一页</span><span>尾页</span>";
	}
?>

	
</div>



</body>
</html>
<?php
mysql_close($conn);
?>