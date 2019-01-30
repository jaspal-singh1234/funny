<?php
session_start();
$a=$_SESSION["a"];
$b=$_SESSION["b"];
$c=$_SESSION["c"];
$d=$_SESSION["d"];
$e=$_SESSION["e"];
$f=$_SESSION["first_name"];
$g=$_SESSION["last_name"];
$h=$_SESSION["email"];
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{



$q="SELECT first_name,last_name,acc_no,ifsc_code,balance,password,add_amount FROM login3_table where first_name='$a'";
$result=$con->query($q);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$r=  $row["first_name"];
$r1=  $row["last_name"];
$r2=  $row["acc_no"];
$r3=  $row["ifsc_code"];
$r4=  $row["balance"]+$row["add_amount"];
$r5=  $row["password"];
}
}
else
{
echo '<script>';
echo $r='alert("this account is not been created")';
echo '</script>';
}
}
?>
<html>
<head>
<style>
.d1{
font-size:70;
margin-left:400px;
color:darkgreen;
}
.d2
{
height:20px;
background-color:red;
}
.d3
{
font-size:60px;
margin-left:100px;
color:skyblue;
}
.d4
{
font-size:60px;
margin-left:100px;
color:gray;
}
.d5
{
font-size:60px;
margin-left:100px;
color:pink;
}
.d6
{
font-size:60px;
margin-left:100px;
color:orange;
}
body
{
background-image:linear-gradient(blue,skyblue,purple);
}
</style>
</head>
<body>
<div class="demo">
<h1 class="d1"><?php echo $a ?>   details </h1>
<hr class="d2">
<h1 class="d3">Account Number <?php echo $f ?></h1>
<h1 class="d4">IFSC Code <?php echo $g ?></h1>
<h1 class="d5">Password <?php echo $h ?></h1>
<h1 class="d6">Balance <?php echo $r4 ?></h1>
</div>
</body>
</html>