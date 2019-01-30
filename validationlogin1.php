<?php
session_start();
$_SESSION["first_name"]=$_GET['demo1'];
$_SESSION["last_name"]=$_GET['demo2'];
$_SESSION["email"]=$_GET['demo3'];
$_SESSION["mobile_number"]=$_GET['demo4'];
$_SESSION["password"]=$_GET['demo5'];
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



$q="SELECT first_name,last_name,email,mobile_number,password FROM login_table where first_name='$_SESSION[first_name]' && password='$_SESSION[password]'";
$result=$con->query($q);
if($result->num_rows>0)
{
echo '<script> var x=window.confirm("login successfully press ok "); if(x==true){ window.location.href="http://localhost/jaspal/atm.php";} else { window.location.href="http://localhost/jaspal/login1.php";   } </script>';
}
else
{
echo '<script> var y=window.confirm("firstly create your account your account is not been created press ok"); if(y==true) { window.location.href="http://localhost/jaspal/signup.php"; } else { window.location.href="http://localhost/jaspal/login1.php"; }</script>';
}
}
?>