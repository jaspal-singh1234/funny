<?php
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-primary text-uppercase text-center">Ajax Curd Operation</h1>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>
</div>
<h2 class="text-danger text-uppercase">all records</h2>
</div>
<div class="records_content">
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX Curd Operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="form-group">
<label>First Name:</label>
<input type="text" class="first" placeholder="enter your first name"><br>
</div>
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="last" placeholder="enter your last name"><br>
</div>
<div class="form-group">
<label>Email:</label>
<input type="text" class="email" placeholder="enter your email"><br>
</div>
<div class="form-group">
<label>Password:</label>
<input type="text" class="password" placeholder="enter your password">
      </div>
</div>
 <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script>
function readRecords()
{
var readrecord="readrecord";
$.ajax({
url:"backend1.php";
type:"POST";
data:{ readrecord:readrecord },

success:function (data,status)
{
$('.records_content').html(data);
}
});
}
function addRecord()
{
var first=$('.first').val();
var last=$('.last').val();
var email=$('.email').val();
var password=$('.password').val();
$.ajax({
url:"backend1.php",
type:'POST',
data:{
first_name:first,
last_name:last,
email:email,
password:password
},
success:function(data,status){
readRecords();
}
});
}
</script>
</body>
</html>