<?php
session_start();
$_SESSION["a"]=$_SESSION["a"];
?>
<html>
<head>
<style>
.container
{
width=600px;
height:400px;
margin-left:500px;
margin-right:400px;
background-color:black;
}
.header
{
color:white;
padding-left:80px;
}
.navigation
{
color:white;
padding-left:60px;
}
.content
{
padding-left:25px;
}
.demo1
{
padding:10px;
margin:5px;
}
.demo2
{
padding:10px;
margin:5px;
}
.demo3
{
padding:10px;
width:395px;
margin:5px;
}
.demo4
{
padding:10px;
width:395px;
margin:5px;
}
.demo5
{
padding:10px;
width:395px;
margin:5px;
}
.footer
{
color:white;
margin-top:20px;
margin-left:60px;
font-size:25px;
width:300px;
}
a
{
text-decoration:none;
}
h2{
color:white;
border:1px solid white;
margin-right:120px;
}
border{
margin-left:30px;
}
h1{
color:white;
}
.demo1
{
}
body
{
background-color:aqua;
}
.demo2
{
}
.demo3
{
}
.demo4
{
}
.demo5
{
}
</style>
<script>
function fn()
{
var a=document.getElementById("password").value.length;
var b=document.getElementById("email").value;
var c=b.indexOf("@");
var d=b.indexOf(".");
var e=b.indexOf("com");
var f=document.getElementById("number").value;
if(d-c<4 || d-c>6)
{
confirm("enter valid Email");
return false;
}
else if(e<c)
{
confirm("enter valid gmail");
return false;
}
else if(f.length<10 || f.length>12 || f.length==11)
{
confirm("enter correct mobile number");
return false;
}
else if(a<6 || a>10)
{
var h=window.confirm("password length should not greater than 10 and less than 6");
return false;
}
}
</script>
</head>
<body>
<div class="container">
<form onSubmit=" return fn()" action="validationcreate2.php" method="POST">
<div class="header">
<h1>CREATE ACCOUNT</h1>
</div>
<div class="navigation">
<a href="deposit.php"><h1>ALREADY CREATED</h1></a>
</div>
<div class="content">
<input type="number" id="number" class="demo1" placeholder="SET YOUR ACCOUNT NUMBER" name="demo1" required><input type="text" class="demo2" placeholder="ENTER IFSC CODE" name="demo2" required><br>
<input type="email" class="demo3" placeholder="EMAIL ADDRESS"  name="demo3" id="email" required><br>
<input type="password" class="demo5" id="password" placeholder="SET A PASSWORD" name="demo4" required>
</div>
<input type="submit" value="Get Started" class="footer">
</form>
</div>
</body>
</html>