<?php 
session_start();
$x=$_POST['hidden1'];
$y=$_POST['hidden2'];
$z=$_POST['ruf'];
$p=$_POST['hidden4'];
$q=$_POST['hidden9'];
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



$q="SELECT first_name,last_name,acc_no,ifsc_code,balance,password,add_amount FROM login3_table where acc_no='$x'";
$result=$con->query($q);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$r=  $row["first_name"];
$r1=  $row["last_name"];
$r2=  $row["acc_no"];
$r3=  $row["ifsc_code"];
$r4=  $row["balance"];
$r5=  $row["password"];
$r7=$row["add_amount"];
}
}
else
{
echo '<script> var y=window.confirm("this account is not been created! you cannot transfer money to that account press ok");  if(y==true) { window.location.href="http://localhost/jaspal/transfer.php"; } else { window.location.href="http://localhost/jaspal/login1.php"; }</script>';
}
$r8="0.0";

$q1="SELECT transfer_money FROM login4_table where acc_from='$z'";
$result1=$con->query($q1);
if($result1->num_rows>0)
{
while($row1=$result1->fetch_assoc())
{
$r6=  $row1["transfer_money"];
}
}
$q3="SELECT first_name,last_name,acc_no,ifsc_code,balance,password,add_amount FROM login3_table where acc_no='$q'";
$result3=$con->query($q3);
if($result3->num_rows>0)
{
while($row4=$result3->fetch_assoc())
{
$r11=  $row4["first_name"];
$r12=  $row4["last_name"];
$r13=  $row4["acc_no"];
$r14=  $row4["ifsc_code"];
$r15=  $row4["balance"];
$r16=  $row4["password"];
$r17=$row4["add_amount"];
}
}
if($r15+$r17<$p)
{
echo '<script> var d=window.confirm("your account does not have sufficient balance to transfer ! firstly credit to your account"); id(d==true) { window.location.href="http://localhost/jaspal/atm.php"; } else { window.location.href="http://localhost/jaspal/login1.php"; }</script>';
}
$q2="insert into login3_table(first_name,last_name,acc_no,ifsc_code,balance,password,add_amount)values('$r','$r1','$r2','$r3','$r4'+'$r6'+'$r7','$r5','$r8')";
$result2=$con->query($q2);
$q4="insert into login3_table(first_name,last_name,acc_no,ifsc_code,balance,password,add_amount)values('$r11','$r12','$r13','$r14','$r15'+'$r17'-'$r6','$r16','$r8')";
$result4=$con->query($q4);
if($result4==true)
{}
else
{
die($con->error);
}
if($result2==true)
{
echo '<script> var x=window.confirm(" amount has been transferred  successfully for another transaction again login ! press OK"); if(x==true) { window.location.href="http://localhost/jaspal/login1.php"; } else {  window.location.href="http://localhost/jaspal/login1.php"; } </script>';
}
}
$con->close();
?>