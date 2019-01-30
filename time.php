<?php
$target_time=mktime(0,0,0,01,01,10);
$current_time=time();
$difference=$target_time-$current_time;
$days=floor($difference/86400);
$hour=floor($difference/3600);
$min=floor($difference/60);
$sec=floor($difference);
echo "$difference .br";
echo "$days .br";
echo "$hour .br";
echo "$min.br";
echo $sec;
?>