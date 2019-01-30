<?php
session_start();
$a=$_SESSION["a"];
$b=$_SESSION["b"];
$c=$_SESSION["c"];
$d=$_SESSION["d"];
$e=$_SESSION["e"];
$first_name=$_SESSION["first_name"];
$ifsc1=$_SESSION["last_name"];
$password=$_SESSION["email"];
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




$q="SELECT balance,add_amount from login3_table where first_name='$a'";
$result=$con->query($q);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$r= $row["balance"]+$row["add_amount"];
}
}
else
{
$r="0.0";
$r1="0.0";
}
}
$con->close();
?>
<html>
<head>
<style>
.demo
{
height:600px;
background-image:linear-gradient(pink,orange,green,blue);
background-color:blue;
padding-left:150px;
padding-bottom:10px;
border:1px solid black;
width:900px;
margin-left:150px;
margin-top:20px;
}
.personal
{
text-transform:uppercase;
margin-left:400px;
}
.demo1
{
font-size:30px;
border-radius:10px;
width:250px;
height:50px;
color:green;
padding-left:20px;
background-image:linear-gradient(white,gray);
margin-left:145px;
}
.demo2
{
font-size:30px;
border-radius:10px;
width:250px;
color:blue;
padding-left:20px;
background-image:linear-gradient(violet,skyblue);
height:50px;
margin-left:190px;
}
.demo3
{
border-radius:10px;
font-size:30px;
width:250px;
background-image:linear-gradient(white,green);
height:50px;
color:red;
padding-left:50px;
margin-left:50px;
}
.demo4
{
border-radius:10px;
font-size:30px;
padding-left:20px;
background-image:linear-gradient(purple,gray);
width:250px;
height:50px;
color:skyblue;
margin-left:145px;
}
.demo5
{
font-size:30px;
width:250px;
padding-left:20px;
background-image:linear-gradient(yellow,gray);
height:50px;
margin-left:180px;
color:purple;
border-radius:10px;
}
.demo6
{
width:250px;
margin-left:165px;
height:60px;
background-image:linear-gradient(yellow,orange,blue,green);
}
.a
{
font-size:50px;
color:green;
}
.c
{
font-size:50px;
color:red;
}
.b
{
font-size:50px;
color:blue;
}
.d
{
font-size:50px;
color:skyblue;
}
.e
{
font-size:50px;
color:purple;
}
</style>
<script>
function fun()
{
var f=document.getElementById("rem").value;
var g=document.getElementById("amount").value;
var h=g+f;
}
</script>
</head>



<body>
<form onSubmit="fun()" action="validationdetails.php" method="POST">
<h1 class="personal"><?php echo $a ?> DETAILS</h1>
<div class="demo">
<h1 class="a">ACCOUNT NO <input type="text" value=<?php echo $first_name ?> name="demo1" class="demo1"></h1>
<h1 class="b">IFSC CODE <input type="text"  value=<?php echo $ifsc1 ?> name="demo2" class="demo2"></h1>
<h1 class="c">PRESENT BALANCE <input type="text" id="rem" value= <?php echo $r ?> name="demo3" class="demo3"></h1>
<h1 class="d">PASSWORD  <input type="text" value=<?php echo $password ?>  name="demo4" class="demo5"></h1>
<h1 class="e">ADD AMOUNT<input type="text" id="amount" name="demo5" class="demo5"></h1>
<input type="submit" value="deposit" class="demo6">
</div>
<input type="hidden" value=<?php echo $a ?> name="t1">
<input type="hidden" value=<?php echo $b ?> name="t2">
<input type="hidden" value=<?php echo $c ?> name="t3">
<input type="hidden" value=<?php echo $d ?> name="t4">
<input type="hidden" value=<?php echo $e ?> name="t5">
</form>
</body>
</html>