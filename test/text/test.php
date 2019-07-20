<?php
//	$name="湛江";
//	 $names=iconv("utf8","utf8_encode", $name);
//	 echo $names;
//	 $ss=utf8_decode($name);
//	 echo $ss;
//	 $sss=utf8_decode($ss);
//	 echo $sss;
//$names=urlencode($name);
//echo $names;
 
$url='http://v.juhe.cn/weather/index?format=2&cityname=%E8%8B%8F%E5%B7%9E&key=您申请的KEY';  
$html = file_get_contents($url);  
echo $html;  
 
	 
?>