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
<form id="my_form" action="insertajax1.php" method="POST">
<div class="col-lg-8 auto">
<h1 class="text-danger text-center">insert data using ajax</h1>
name:<input type="text" class="form-control" name="t1">
class:<input type="text" class="form-control" name="t2">
occupation:<input type="text" class="form-control" name="t3">


salary:<input type="text" class="form-control" name="t4">
<input type="submit" class="btn btn-primary" name="submit" id="submit" value="submit">
</div>
</form>
</div>
<script type="text/javascript">
$(document).ready(function()
{
var form=#('my_form');
$('#submit').click(function(){
$.ajax({
url: form.attr("action"),
type:'POST',
data:$("#my_form input").serialize(),
success:function(data)
{
console.log(data);
}
});
}
</script>
</body>
</html>