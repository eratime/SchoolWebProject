<?php
//截取函数 $a 目标字符串 $b 输入要截取多少个 $c 截取几个
function cutStr($a,$b,$c){
	if(strlen($a)>$b){
		$i=mb_substr($a,0,$c,"utf8")."...";	
	}else{
		$i=$a;	
	}
	return $i;
}

?>