<?php
session_start();
$x=$_SESSION['x'];
$y=$_SESSION['y'];
$z=$_SESSION['z'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="insert into login5table(first_name,last_name,acc_no,ifsc_code,amount,tran_acc_no,tran_ifsc_code)values(select logintable.first_name,logintable.last_name,login1table.acc_no,login1table.ifsc_code,login4table.amount,login4table.tran_acc_no,login4table_ifsc_code from logintable,login1table,login4table)";
mysqli_query($con,$q);
mysqli_close($con);
?>