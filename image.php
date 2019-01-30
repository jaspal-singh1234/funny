<?php
error_reporting(0);
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";
$con=new mysqli($servername,$username,$pass,$dbname);
$query="select * from form";
$data=mysqli_query($con,$query);
while($result=mysqli_fetch_array($data))
{
echo $result[email_id]." ".$result[password]."<a href=image1.php?emid=$result[email_id]&pd1=$result[password]>edit</a>"."<br>";
}
?>