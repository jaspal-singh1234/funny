<?php
session_start();
$_SESSION["a"]=$_POST['t1'];
$_SESSION["b"]=$_POST['t2'];
$_SESSION["c"]=$_POST['t3'];
$_SESSION["d"]=$_POST['t4'];
$_SESSION["e"]=$_POST['t5'];
$_SESSION["x"]=$_POST['demo1'];
$_SESSION["y"]=$_POST['demo2'];
$_SESSION["z"]=$_POST['demo3'];
$_SESSION["p"]=$_POST['demo4'];
$_SESSION["q"]=$_POST['demo5'];
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";




$con=new mysqli($servername,$username,$pass,$dbname);
$q="INSERT INTO login2_table (acc_no,ifsc_code,balance,password,add_amount) values ('$_SESSION[x]','$_SESSION[y]','$_SESSION[z]','$_SESSION[p]','$_SESSION[q]')";
$qq=$con->query($q);
if($qq==true)
{
header('location:validationmerge.php');
}
?>