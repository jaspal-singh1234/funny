<?php 
$a=$_POST['hidden1'];
$b=$_POST['hidden2'];
$c=$_POST['hidden3'];
$d=$_POST['hidden4'];
$e=$_POST['hidden5'];
$f=$_POST['hidden6'];
$g=$_POST['hidden7'];
$h=$_POST['hidden8'];
?>
<html>
<head>
<script>
function fun()
{
var x=document.getElementById("foo");
x.submit();
}
window.onload=fun;
</script>
</head>
<body>




<div class="content">
<form action="withdraw.php" id="foo" method="POST">
<input type="text" class="demo1" value=$a placeholder="FIRST NAME" name="hidden3" ><input type="text" class="demo2" value=$b placeholder="LAST NAME" name="fn1" ><br>
<input type="email" class="demo3" value=$c placeholder="EMAIL ADDRESS"  name="fn2" id="email" ><br>
<input type="number" class="demo4"  value=$d placeholder="ENTER YOUR MOBILE NUMBER" id="number" name="fn3" ><br>
<input type="password" class="demo5" value=$e id="password" placeholder="SET A PASSWORD" name="fn4" >
<input type="password" class="demo5" value=$f id="password" placeholder="SET A PASSWORD" name="fn5" >
<input type="password" class="demo5" value=$g id="password" placeholder="SET A PASSWORD" name="fn6" >
<input type="password" class="demo5" value=$h id="password" placeholder="SET A PASSWORD" name="fn7" >
</form>
</div>
<input type="submit" value="Get Started" class="footer">
</body>
</html>