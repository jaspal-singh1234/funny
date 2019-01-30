<?php
session_start();
header('location:login1.php');
$firstname=$_POST['demo1'];
$lastname=$_POST['demo2'];
$email=$_POST['demo3'];
$mobilenumber=$_POST['demo4'];
$password=$_POST['demo5'];
$con=mysqli_connect('localhost','root');
if(!$con)
{
echo 'not connected';
}
if(!mysqli_select_db($con,'db'))
{
echo 'database not selected';
}



$q="select * from logintable where firstname='$firstname',lastname='$lastname',email='$email',mobilenumber='$mobilenumber',password='$password'";


$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "duplicate data";
}
else
{
$qy= "insert into logintable(firstname,lastname,email,mobilenumber,password)values('$firstname','$lastname','$email','$mobilenumber','$password')";
mysqli_query($con,$qy);
echo "connection successfully";
}
?>