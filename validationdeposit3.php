<?php
session_start();
$servername="127.0.0.1";
$username="root";
$pass="root123";
$dbname="d_b";
$_SESSION["first_name"]=$_POST['account'];
$_SESSION["last_name"]=$_POST['ifsc1'];
$_SESSION["email"]=$_POST['password'];
$_SESSION["a"]=$_POST['hidden1'];
$_SESSION["b"]=$_POST['hidden2'];
$_SESSION["c"]=$_POST['hidden3'];
$_SESSION["d"]=$_POST['hidden4'];
$_SESSION["e"]=$_POST['hidden5'];
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{
$q="SELECT account_number,ifsc_code,email_id,password FROM login1_table where account_number='$_SESSION[first_name]' && password=$_SESSION[email]'";
$result=$con->query($q);
if($result->num_rows>0)
{
header('location:withdraw.php');
}
else
{
echo '<script> var x=window.confirm("your account has not been created firstly create your account ! press ok"); if(x==true) { window.location.href="http://localhost/jaspal/create1.php"; } else { window.location.href="http://localhost/jaspal/deposit3.php"; } </script>';
}
}
?>