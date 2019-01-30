<?php
$im=imagecreate(200,200);
imagecolorallocate($im,40,20,250);
imagejpg($im,"a.png");
?>
<html>
<head>
<style>
body
{
background-image:linear-gradient(red,blue,skyblue,yellow,purple,violet,green,darkgreen,orange,pink,gray,indigo,brown,white);
}
</style>
</head>
<body>
<img src="a.jpg">
</body>
</html>