<?php
session_start();
$servername="127.0.0.1";
$username="root";
$pass="root123";
$dbname="d_b";
$_SESSION["first_name"]=$_POST['demo1'];
$last_name=$_POST['demo2'];
$email=$_POST['demo3'];
$mobile_number=$_POST['demo4'];
$password=$_POST['demo5'];
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{






$q="SELECT first_name,last_name,email,mobile_number,password FROM login_table where first_name='$_SESSION[first_name]'";
$result=$con->query($q);
if($result->num_rows>0)
{
echo '<script> var x=window.confirm("your account has already been created please login  press ok"); if(x==true) {  window.location.href="http://localhost/jaspal/login1.php";  } else {window.location.href="http://localhost/jaspal/signup.php"; }</script>';
}
else
{
$q="INSERT INTO login_table (first_name,last_name,email,mobile_number,password) values ('$_SESSION[first_name]','$last_name','$email','$mobile_number','$password')";
if($con->query($q)===true)
{


echo '<script>var y=window.confirm("your account has been registered successfully  now you login your account press ok"); if(y==true) { window.location.href="http://localhost/jaspal/login1.php"; }else { window.location.href="http://localhost/jaspal/signup.php";  }</script>';
}
else
{
 echo "error".$q."<br>".$con->error;
}
}
}
$con->close();
?>