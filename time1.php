<?php
session_start();
if(isset($_SESSION['time']))
{
$diff=$_SESSION['time'];
$hh=$diff/3600;
$diff=floor($diff/3600);
$mm=floor($diff%60);
$diff=$diff%60;
$ss=$diff;
echo "$hh <br>";
echo "$mm <br>";
echo "$ss <br>";
$_SESSION['time']=$_SESSION['time']-1;
$hh=$_SESSION['time'];
if($hh==-1 || $mm==-1 || $ss==-1)
{
echo "<br> time up";
unset($_SESSION['time']);
}
if($hh==0)
{
if($mm==0)
{
if($ss==0)
{
unset($_SESSION['time']);
}
else
{
$ss=59;
}
}
else
{
if($ss==0)
{
$ss=59;
echo $ss;
$mm=$mm-1;
}
else
{
$ss=$ss-1;
$mm=$mm-1;
}
}
}
else
{
if($mm==0)
{
if($ss==0)
{
$mm=59;
$ss=59;
}
else
{
$ss=$ss-1;
$mm=59;
}
}
else
{
if($ss==0)
{
$ss=59;
}
else
{
$ss=$ss-1;
}
}
}
}
?>