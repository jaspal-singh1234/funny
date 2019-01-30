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
<h2 class="text-danger text-center">get data from database</h2>
<form>
username:<input type="text" class="form-control"><br>
password:<input type="text" class="form-control"><br>


degree:<select class="form-control" onchange="my_func(this.value)">
<option>Select any one</option>
<?php 

$q="select * from degree";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{
?>
<option value="<?php echo $row['mid'];?> "> <?php echo  $row['degress'];  ?> </option>
<?php
}
?>
</select>
classes:<select class="form-control" id="form1">
<option>choose any one</option>
</select>
<button class="btn btn-primary">submit</button>
</form>
</div>
<script type="text/javascript">
function my_func(datavalue)
{
$.ajax({
url:  'index2.php',
type:  'POST',
data:  {data:datavalue},
success:function(result){
$('#form1').html(result);
}
});
}
</script>
</body>
</html>