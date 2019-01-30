<?php
session_start();
$a=$_SESSION["a"];
$b=$_SESSION["b"];
$e=$_SESSION["c"];
$d=$_SESSION["d"];
$e=$_SESSION["e"];
$x=$_SESSION["x"];
$y=$_SESSION["y"];
$z=$_SESSION["z"];
$p=$_SESSION["p"];
$q=$_SESSION["q"];
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{
$q="insert into login3_table(first_name,last_name,acc_no,ifsc_code,balance,password,add_amount)values('$a','$b','$x','$y','$z','$p','$q')";
if($con->query($q)===true)
{
echo '<script> var x=window.confirm("money deposited successfully press ok"); if(x=true){ var y=window.confirm("for another transacton please login again"); if(y==true) { window.location.href="http://localhost/jaspal/login1.php"; } else { window.location.href="http://localhost/jaspal/login1.php"; }} else { window.location.href="http://localhost/jaspal/login1.php"; } </script>'; 
}
else
{
 echo "error".$q."<br>".$con->error;
}
}
$con->close();
?>