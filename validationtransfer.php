<?php
session_start();
$_SESSION["a"]=$_POST['t1'];
$_SESSION["b"]=$_POST['t2'];
$_SESSION["c"]=$_POST['t3'];
$_SESSION["d"]=$_POST['t4'];
$_SESSION["e"]=$_POST['t5'];
$k=$_POST['t9'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];
$m=$_POST['t10'];
$n=$_POST['t11'];
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";





$con=new mysqli($servername,$username,$pass,$dbname);
$q="INSERT INTO login4_table (first_name,last_name,transfer_money,acc_from,acc_to,ifsc_code) values ('$_SESSION[a]','$_SESSION[b]','$f','$k','$g','$h')";
$qq=$con->query($q);
?>
<html>
<head>
<style>
.demo{
margin:0 auto;
border:1px solid black;
width:300px;
height:400px;
margin-top:80px;
}
.b
{
width:80px;
}
</style>
</head>
<body>


<form action="validationmerge1.php" method="POST">
<div class="demo">
<h1><i>amount <?php echo $f ?> will  be deducted from your account<?php echo $k ?> </i></h1><br>
<h1>again enter your account number</h1>
<input type="text" name="ruf" >
<input type="hidden" name="hidden1" value=<?php echo $g ?> <br>
<input type="hidden" name="hidden2" value=<?php echo $h ?><br>
<input type="hidden" name="hidden4" value=<?php echo $f ?><br>
<input type="hidden" name="hidden9" value=<?php echo $k ?><br>
<input type="hidden" name="hidden10" value=<?php echo $m ?><br>
<input type="hidden" name="hidden11" value=<?php echo $n ?><br>
<input type="submit" value="are you ready" class="b">
</div>
</form>
</body>
</html>