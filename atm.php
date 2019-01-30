<?php
session_start();
$_SESSION["fn"]=$_SESSION["first_name"];
$fn1=$_SESSION["last_name"];
$fn2=$_SESSION["email"];
$fn3=$_SESSION["mobile_number"];
$fn4=$_SESSION["password"];
$_SESSION["first_name"]="jaspal";
$_SESSION["last_name"]="jaspal";
$_SESSION["email"]="jaspal";
$_SESSION["mobile_number"]="jaspal";
?>
<html>
<head>
<style>
.Withdraw
{
background-color:;
width:350px;
margin-left:80px;
margin-top:20px;
padding:10px;
font-size:26px;
border-radius:10px;
border:1px solid black;
}
.DepositMoney
{
background-color:;
width:350px;
font-size:26px;
margin-left:80px;
margin-top:20px;
padding:10px;
border-radius:10px;
border:1px solid black;
}
.MoneyTransfer
{
border-radius:10px;
font-size:26px;
background-color:;
margin-left:80px;
margin-top:20px;
width:350px;
border:1px solid black;
padding:10px;
}
.balance
{
background-color:;
margin-top:20px;
margin-left:80px;
border-radius:10px;
width:350px;
font-size:26px;
border:1px solid black;
padding:10px;
}
.hidden
{
background-color:;
margin:10px;
border-radius:10px;
width:220px;
font-size:26px;
border:1px solid black;
padding:10px;
}
.hr
{
background-color:red;
margin-top:30px;
padding-top:20px;
}
.student1
{
}

.student
{
margin:0px 0px 80px 120px;
border:1px solid black;
background-color:skyblue;
width:1100px;
height:700px;
}
.choice
{
margin-left:400px;
margin-top:0px;
}
.welcome
{
margin-left:340px;
margin-bottom:0px;
}
.demo
{
padding-top:0px;
margin-top:10px;
margin-left:250px;
padding-left:50px;
padding-right:40px;
border:2px solid black;
width:500px;
height:380px;
}
.bank
{
margin-left:230px;
font-size:50px;
}
</style>
<script>
function deposit()
{
}
function deposit1()
{
}
function deposit2()
{
}
function deposit3()
{
}
</script>
</head>
<body>
<div class="student">
<h1 class="bank">STUDENT BANK ASSOCIATION</h1>
<hr class="hr">
<h1 class="welcome">Welcome To Student Bank Association ATM</h1><br>
<h1 class="choice">Select Your Choice</h1>
<div class="demo">
<form action="deposit3.php" method="POST">
<input type="submit" value="Cash Withdraw" id="withdraw" name="withdraw" class="Withdraw">
<input type="hidden" value=<?php echo $fn1 ?> name="fn1">
<input type="hidden" value=<?php echo $fn2 ?> name="fn2">
<input type="hidden" value=<?php echo $fn3 ?> name="fn3">
<input type="hidden" value=<?php echo $fn4 ?> name="fn4">
</form><form action="deposit.php" method="POST">







<input type="submit" value="DepositMoney" name="deposit_money" class="DepositMoney" >
<br><input type="hidden" value=<?php echo $fn1 ?> name="fn1"><input type="hidden" value=<?php echo $fn2 ?> name="fn2">
<input type="hidden" value=<?php echo $fn3 ?> name="fn3"><input type="hidden" value=<?php echo $fn4 ?> name="fn4">
</form>
<form action="deposit2.php" method="POST">
<input type="submit" name="balance"  value="Balance Enquiry" class="balance" onclick="deposit()"><br>
<input type="hidden" value=<?php echo $fn1 ?> name="fn1">
<input type="hidden" value=<?php echo $fn2 ?> name="fn2">
<input type="hidden" value=<?php echo $fn3 ?> name="fn3">
<input type="hidden" value=<?php echo $fn4 ?> name="fn4">
</form>
<form action="deposit1.php" method="POST">
<input type="submit" value="Money Transfer"  name="money_transfer" class="MoneyTransfer">
<input type="hidden" value=<?php echo $fn1 ?> name="fn1">
<input type="hidden" value=<?php echo $fn2 ?> name="fn2">
<input type="hidden" value=<?php echo $fn3 ?> name="fn3">
<input type="hidden" value=<?php echo $fn4 ?> name="fn4">
</form>
</div>
</div>
</body>
</html>