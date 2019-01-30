<?php
$con=mysqli_connect('localhost','root',"root123");
mysqli_select_db($con,'d_b');
extract($_POST);
if(isset($_POST['submit']))
{
$q="insert into ajax1 (name,class,accupation,salary) values('$t1','$t2','$t3','$t4')";
$result=mysqli_query($con,$q);
header('location:insertajax.php');
}
?>