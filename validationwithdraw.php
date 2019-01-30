<?php 
$r8="0.0";
$a=$_POST['hidden1'];
$b=$_POST['hidden2'];
$c=$_POST['hidden3'];
$d=$_POST['hidden4'];
$e=$_POST['hidden5'];
$f=$_POST['amount'];
$g=$_POST['hidden6'];
$h=$_POST['hidden7'];
$m=$_POST['hidden8'];
$servername="localhost";
$dbname="d_b";
$pass="root123";
$username="root";
$con=new mysqli($servername,$username,$pass,$dbname);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
else
{
$q="INSERT INTO login5_table (first_name,last_name,acc_no,ifsc_code,withdraw_money) values ('$d','$e','$a','$b','$f')";
$con->query($q);
$q1="SELECT first_name,last_name,acc_no,ifsc_code,balance,password,add_amount FROM login3_table where acc_no='$a'";
$result1=$con->query($q1);
if($result1->num_rows>0)
{
while($row1=$result1->fetch_assoc())
{
$r=  $row1["first_name"];
$r1=  $row1["last_name"];
$r2=  $row1["acc_no"];
$r3=  $row1["ifsc_code"];
$r4=  $row1["balance"];
$r5=  $row1["password"];
$r7=$row1["add_amount"];
}
}
if($r4+$r7<$f)
{
echo '<script> var s=window.confirm("your account does not have that sufficient balance firstly credit in your account"); if(s==true) { window.location.href="http://localhost/jaspal/atm.php"; } else { window.location.href="http://localhost/jaspal/login1.php"; }</script>';
}
$q2="insert into login3_table(first_name,last_name,acc_no,ifsc_code,balance,password,add_amount)values('$r','$r1','$r2','$r3','$r4'+'$r7'-'$f','$r5','$r8')";
$result2=$con->query($q2);
if($result2==true)
{
echo '<script> var y=window.confirm("amount has been debited from your account press ok");if(y==true){var z=window.confirm("for another transaction please login again"); if(z==true){  window.location.href="http://localhost/jaspal/login1.php";  }  else{	window.location.href="http://localhost/jaspal/login1.php"; }} else{ window.location.href="http://localhost/jaspal/login1.php"; }</script>';
}
}
?>