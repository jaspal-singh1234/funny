<?php
session_start();
$_SESSION["fn"]=$_SESSION["fn"];
$b=$_POST['fn1'];
$c=$_POST['fn2'];
$d=$_POST['fn3'];
$e=$_POST['fn4'];
?>
<html>
<head>
<style>
.demo{
margin:30px 100px 100px 290px;
border:1px solid black;
background-color:skyblue;
width:600px;
}
.demo1
{
border:1px solid black;
margin-left:50px;
margin-top:50px;
padding:2px;
padding-left:10px;
margin-right:150px;
background-color:lightgreen;
height:40px;
}
.ifsc1
{
width:260px;
background-color:lightgreen;
height:40px;
margin:20px;
}
.deposit
{
background-color:lightgreen;
width:260px;
height:40px;
font-size:30px;
margin:20px;
}
.password
{
width:260px;
height:40px;
background-color:lightgreen;
margin:20px;
}
::-webkit-input-placeholder
{
font-size:20px!important;
}
.account
{
width:260px;
height:40px;
color:black;
background-color:lightgreen;
margin:20px;
}
.done
{
width:260px;
height:40px;
margin:20px;
}
.atm1
{
margin:2px;
}
.demo2
{
margin-right:140px;
border:1px solid black;
margin-left:50px;
margin-top:50px;
margin-bottom:30px;
}
a
{
text-decoration:none;
}
</style>
<script>
function fun()
{
var x=document.getElementById("account").value;
var y=document.getElementById("ifsc1").value;
var z=document.getElementById("password").value;
ifif(x=="")
{
alert("please enter your account number");
return false;
}
else if(y=="")
{
alert("please enter your ifsc code");
return false;
}
else if(z=="")
{
alert("please enter your password");
return false;
}
}
</script>
</head>
<body>
<form onSubmit="return fun()" action="validationdeposit2.php" method="POST">
<div class="demo">
<div class="demo1">
<h1 class="atm1"><a href="create.php">Create Your Atm Account</a></h1>
</div>
<div class="demo2">
<input type="text" class="account" name="account" id="account" placeholder="enter your Account number" required><br>
<input type="text" class="ifsc1" name="ifsc1" id="ifsc1" placeholder="enter IFSC code" required><br>
<input type="password" class="password" name="password" id="password" placeholder="enter your password" required><br>
<input type="submit" value="done" class="done">
</div>
</div>
<input type="hidden" value=<?php echo $b ?> name="hidden2">
<input type="hidden" value=<?php echo $c ?> name="hidden3">
<input type="hidden" value=<?php echo $d ?> name="hidden4">
<input type="hidden" value=<?php echo $e ?> name="hidden5">
</form>
</body>
</html>