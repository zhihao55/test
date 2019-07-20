<?php
 	$cityname=$_REQUEST['cityname'];
	echo "当前的城市：".$cityname;
	echo '<br/>';
	$cityname=urlencode($cityname);
	$dtype='json';
	$format='1';
//	echo $cityname;
	$key='b8b92d0918d0019c8027f669d45c97f1';
	$url="http://v.juhe.cn/weather/index?cityname=$cityname&dtype=&format=&key=$key";
//	echo $url;
	$tianqi=file_get_contents($url);
	var_dump($tianqi);
	$tian=json_decode($tianqi);
	$resultcode=($tian->resultcode);
	if($resultcode!=200){
		echo "查询失败";
		die;
	}
//	var_dump($tian);
//	获取当前的天气
	$sk=($tian->result->sk);
	$temp=($sk->temp);
	$wind_direction=($sk->wind_direction);
	$time=($sk->time);
	echo "当前的温度：".$temp;
	echo '<br/>';
	echo "当前的风向：".$wind_direction;
	echo '<br/>';
	echo "更新时间：".$time;
	echo '<br/>';
//	获取今天的天气
	$today=($tian->result->today);
//	获取明天的温度
	$temperature=($today->temperature);
	echo "今天的温度：".$temperature;
	echo '<br/>';
	$weather=($today->weather);
	
	echo "今天天气：".$weather;

	echo '<br/>';
	
//	获取今天的详细天气
	$dressing_index=($today->dressing_index);
	$dressing_advice=($today->dressing_advice);
	
	echo "穿衣指数：".$dressing_index;
	echo '<br/>';
	
	echo "穿衣建议:".$dressing_advice;
	
?>