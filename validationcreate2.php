<?php
session_start();
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";
$_SESSION["first_name"]=$_POST['demo1'];
$_SESSION["last_name"]=$_POST['demo2'];
$_SESSION["email"]=$_POST['demo3'];
$_SESSION["mobile_number"]=$_POST['demo4'];
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{


$q="INSERT INTO login1_table (account_number,ifsc_code,email_id,password) values ('$_SESSION[first_name]','$_SESSION[last_name]','$_SESSION[email]','$_SESSION[mobile_number]')";
if($con->query($q)===true)
{
echo '<script> var x= window.confirm("your account has been registered successfully now you login on your atm account press ok");  if(x==true) { window.location.href="http://localhost/jaspal/demo2.php"; } else { window.location.href="http://localhost/jaspal/create.php"; }</script>';
}
else
{
 echo "error".$q."<br>".$con->error;
}
}
$con->close();
?>