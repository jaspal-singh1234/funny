<?php 
session_start();
$first_name=$_SESSION["first_name"];
$last_name=$_SESSION["last_name"];
$email=$_SESSION["email"];
$a=$_SESSION["a"];
$b=$_SESSION["b"];
$c=$_SESSION["c"];
$d=$_SESSION["d"];
$e=$_SESSION["e"];
?>
<html>
<head>
<style>
.ruf
{
border:1px solid black;
background-image:linear-gradient(red,blue,orange);
margin-left:50px;
margin-top:40px;
height:600px;
margin-right:100px;
}
.demo
{
font-size:70px;
margin-left:100px;
margin-top:40px;
color:green;
}
.submit
{
width:200px;
height:50px;
font-size:40px;
color:gray;
background-image:linear-gradient(yellow,orange);
margin-left:350px;
margin-top:40px;
}
.demo1
{
width:400px;
height:60px;
color:blue;
font-size:50px;
border-radius:20px;
background-image:linear-gradient(pink,red);
margin-left:300px;
border:1px solid pink;
margin-top:40px;
}
</style>
</head>
<body>




<form action="validationwithdraw.php" method="POST">
<div class="ruf">
<h1 class="demo" >Enter Amount that you want to withdraw</h1>
<input type="text" class="demo1" name="amount"><br>
<input type="submit" value="submit" class="submit">
</div>
<input type="hidden" value=<?php echo $first_name ?> name="hidden1">
<input type="hidden" value=<?php echo $last_name ?> name="hidden2">
<input type="hidden" value=<?php echo $email ?> name="hidden3">
<input type="hidden" value=<?php echo $a ?> name="hidden4">
<input type="hidden" value=<?php echo $b ?> name="hidden5">
<input type="hidden" value=<?php echo $c ?> name="hidden6">
<input type="hidden" value=<?php echo $d ?> name="hidden7">
<input type="hidden" value=<?php echo $e ?> name="hidden8">
</form>
</body>
</html>
