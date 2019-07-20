<?php
$order = date('Ymd').substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(1000, 9999));
//     ehco $order;
var_dump($order);
echo "$order";
echo "<hr/>";

//echo sha1(1234564);
$date="我是你爸爸";

$ss=base64_encode($date);
// var_dump($ss);
echo "$ss";
echo "<hr\>";
$zz=base64_decode($ss);
echo "<hr/>";

echo "$zz";



?>