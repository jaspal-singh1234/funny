<?php
session_start();
$firstname=$_POST['demo1'];
$lastname=$_POST['demo2'];
$email=$_POST['demo3'];
$mobilenumber=$_POST['demo4'];
$con=mysqli_connect('localhost','root');
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{



$q="SELECT account_number,ifsc_code,email_id,password FROM login1_table where account_number='$_SESSION[first_name]'";
$result=$con->query($q);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$r=  $row["first_name"];
$r1=  $row["last_name"];
$r2=  $row["email"];
$r3=  $row["mobile_number"];
$r4=  $row["password"];
}
}
else
{
echo '<script>';
echo 'alert("firstly registered on your atm account")';
echo '</script>';
}
header('location:atm.php');
?>