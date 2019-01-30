<?php
session_start();
$a=$_SESSION['a'];
$b=$_SESSION['b'];
$c=$_SESSION['c'];
$d=$_SESSION['d'];
$e=$_SESSION['e'];
$f=$_SESSION['first_name'];
$g=$_SESSION['last_name'];
$h=$_SESSION['email'];
?>
<html>
<head>
<style>
.demo{
width:600px;
height:600px;
border:1px solid black;
background-color:skyblue;
margin-left:200px;
margin-top:20px;
}
.transfer
{
margin-left:45px;
font-size:50px;
}
.line{
height:20px;
background-color:red;
}
.demo1
{
padding-top:0px;
font-size:25px;
line-height:28px;
margin-left:50px;
}
.t1
{
margin-top:0px;
width:270px;
height:35px;
}
.t2
{
width:270px;
height:35px;
}
.t3
{
width:270px;
height:35px;
}
.go
{
width:470px;
height:40px;
margin-top:20px;
}
.amount
{
margin-top:10px;
}
.account
{
margin-top:10px;
}
.ifsc
{
margin-top:10px;
}
</style>
</head>
<body>
<div class="demo">


<h1 class="transfer">TRANSFER PAGE</H1>
<form  action="validationtransfer.php" method="POST">
<hr class="line">
<div class="demo1">




<h1 class="amount">ENTER AMOUNT</H1><input type="text" class="t1" name="t6">
<h1 class="account">TO ACCOUNT NO</H1><input type="text" class="t2" name="t7">
<h1 class="ifsc">TO IFSC CODE</h1><input type="text" class="t3" name="t8"><br>
<input type="submit" value="GO"  name="sign_in" class="go">
</div>
</div>
<input type="hidden" value=<?php echo $a ?> name="t1">
<input type="hidden" value=<?php echo $b ?> name="t2">
<input type="hidden" value=<?php echo $c ?> name="t3">
<input type="hidden" value=<?php echo $d ?> name="t4">
<input type="hidden" value=<?php echo $e ?> name="t5">
<input type="hidden" value=<?php echo $f ?> name="t9">
<input type="hidden" value=<?php echo $g ?> name="t10">
<input type="hidden" value=<?php echo $h ?> name="t11">
</form>
</body>
</head>
</html>