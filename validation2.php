<?php
session_start();
$firstname=$_POST['demo1'];
$lastname=$_POST['demo2'];
$email=$_POST['demo3'];
$mobilenumber=$_POST['demo4'];
$con=mysqli_connect('localhost','root');
if(!$con)
{
echo 'not connected';
}
if(!mysqli_select_db($con,'db'))
{
echo 'database not selected';
}



$q="select * from login1table where account_number='$firstname',ifsc_code='$lastname',email_id='$email',password='$mobilenumber'";


$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "duplicate data";
}
else
{
$qy= "insert into login1table(account_number,ifsc_code,email,password)values('$firstname','$lastname','$email','$mobilenumber')";
mysqli_query($con,$qy);
echo "connection successfully";
}
?>