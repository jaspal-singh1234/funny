<?php
?>
<html>
<head>
<style>
body
{
background-image:linear-gradient(green,skyblue);
}
.container
{
padding:10px;
margin:0 auto;
border:2px solid black;
width:500px;
background-image:linear-gradient(green,skyblue);
}
.header
{
}
.t1{
border:3px solid black;
margin-left:40px;
margin-top:0px;
border-radius:10px;
width:400px;
height:50px;
}
.t2{
border:3px solid black;
margin-left:40px;
height:50px;
border-radius:10px;
margin-top:20px;
width:400px;
}
.t3{
border:3px solid black;
margin-left:40px;
height:50px;
margin-top:20px;
border-radius:10px;
width:400px;
}
.t4{
border:3px solid black;
margin-left:40px;
height:50px;
margin-top:20px;
border-radius:10px;
width:400px;
}
.t5{
border:3px solid black;
margin-left:40px;
border-radius:10px;
margin-top:20px;
height:50px;
width:400px;
}
::-webkit-input-placeholder
{
font-size:30px;
padding-left:30px;
}
.t6
{
height:50px;
margin-top:20px;
margin-left:80px;
border-radius:10px;
width:300px;
}
.hello
{
margin-top:0px;
font-size:50px;
margin-left:60px;
margin-bottom:10px;
}
</style>
</head>
<body>
<form action="validationsignup.php" method="POST">
<div class="container">
<h1 class="hello"> Create Your Account</h1>
<div class="header">
<input type="text" class="t1" name="demo1" placeholder="enter first name" required><br>
<input type="text" class="t2" name="demo2" placeholder="enter last name" required><br>
<input type="email" class="t3"  name="demo3" placeholder="enter your email" required><br>
<input type="number"class="t4" name="demo4" placeholder="enter your mobile number" required><br>
<input type="password" class="t5" name="demo5"  placeholder="create your password" required><br>
<input type="submit"  class="t6" value="Go">
</div>
</div>
</form>
</body>
</html>