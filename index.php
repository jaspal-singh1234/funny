<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$current=date('h:i:s a');
$d=date("m/d/y");
$target=mkt('h:i:s a');
echo "$current<br>";
echo "$d<br>";
echo $target;
?>
<html>
<head>
<style>
.button
{
margin:150px;
margin-top:150px;
padding:15px;
text-decoration:none;
}
</style>
</head>
<body>
</body>
</html>