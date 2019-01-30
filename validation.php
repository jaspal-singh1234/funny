<?php 
session_start();
$x=$_post['username'];
$y=$_post['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from loginform where username='$x' && password='$y'";
$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
if($num==1)
{
$_SESSION['z']=$x;
header('location:http://localhost/jaspal/home.php');
}
else
{
header('location:http://localhost/jaspal/home.php');
}
?>

