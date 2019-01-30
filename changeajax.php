<?php 
$con=mysqli_connect('localhost','root',"root123");
mysqli_select_db($con,'d_b');
?>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div id="loaddata">
<h1>this is going to be change</h1>
</div>
<button class="btn btn-primary" onclick="fun_c()">submit</button>
</div>


<script>
function fun_c()
{
var req=new XMLHttpRequest();
req.open("GET","load.php" ,true);
req.send(); 
req.onreadystatechange=function()
{
if(req.readystate==4 && req.status==200)
{
document.getElementById('loaddata').innerHTML=req.responseText;
}
}
}
</script>
</body>
</html>