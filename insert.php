<?php
$con=mysqli_connect('localhost','root',"root123","d_b");
mysqli_select_db($con);
extract($_POST)
if(isset($_POST['submit']))
{
$q="insert into ajax (name) values($t1)";
$query=mysqli_query($con,$q);
header('location:input.php');
}
?>