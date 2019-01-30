<?php
?>
<html>
<head>
<style>
.demo{
width:200px;
margin-left:400px;
padding:20px;
background-color:green;
}
.writeotp
{
margin:10px;
}
.otp
{
margin:10px;
}
.verify
{
margin:10px;
}
</style>
<script>
function fn()
{
var e=document.getElementById("demo1").value;
var f=document.getElementById("demo2").value;
if(e==f)
{
var h=window.confirm("otp entered successful ! press ok");
if(h==true)
{
window.location.href="http://localhost/jaspal/home1.php";
}
}
else
{
alert("enter correct otp");
}
}
</script>
</head>
<body>
<div class="demo">
<h1> otp has been sended to your entered mobile number</h1>
<input type="text" placeholder="enter otp" name="otp" class="otp" id="demo1">
<input type="text"  class="writeotp" value=<?php echo (rand(1000,100000)) ?> name="otpcode" id="demo2" ><br>
<input type="submit" value="verify otp" onClick="fn()" class="verify">
</div>
</body>
</html>