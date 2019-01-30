<?php
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<style>
body
{
background-image:linear-gradient(orange,violet,red,gray,yellow,darkblue);
}

.demo4
{
margin-left:500px;
margin-top:30px;
clear:both;
}
.demo
{
background-image:url("logo2.jpg");
height:700px;
background-color:lightblack;
margin-left:0px;
margin-right:0px;
}
.img1
{
margin-left:130px;
margin-top:0px;
border-radius:360px;
}
.anchor1
{
margin-left:220px;
text-decoration:none;
color:white;
}
.anchor2
{
margin-left:50px;
margin-top:20px;
text-decoration:none;
color:white;
}
.anchor3
{
margin-left:50px;
text-decoration:none;
color:white;
}
.anchor4
{
margin-left:50px;
text-decoration:none;
color:white;
}
.anchor5
{
margin-left:50px;
text-decoration:none;
color:white;
}
.anchor6
{
margin-left:50px;
text-decoration:none;
color:white;
}
.btn1
{
width:80px;
height:30px;
background-color:green;
border-radius:10px;
margin-left:50px;
font-size:20px;
color:white;
}
a:hover
{
color:red;
}
.heading1
{
margin-left:50px;
margin-top:100px;
color:white;
}
.btn-primary
{
width:90px;
height:40px;
background-color:green;
border-radius:10px;
margin-left:50px;
font-size:20px;
color:white;
}
.heading2
{
margin-top:30px;
margin-left:70px;
}
.first
{
font-size:20px;
margin-left:40px;
margin-top:0px;
border-radius:10px;

}
.last
{
font-size:20px;
border-radius:10px;
margin-left:40px;
}
.email
{
border-radius:10px;
font-size:20px;
margin-left:105px;
}
.password
{
font-size:20px;
margin-left:55px;
border-radius:10px;
}
.label1,.first
{
display:inline;
}
.label2,.last
{
display:inline;
}
.label3,.email
{
display:inline;
}
.label4,.password
{
display:inline;
}
.talks
{
margin-left:500px;
}
.photos
{
border:1px solid black;
width:900px;
height:300px;
margin-left:200px;
}
.demo3
{
clear:both;
}
.demo2
{
float:right;
margin-left:800px;
}
.src1
{
webkit-transform:scaleX(-1);
transform:scale:scaleX(-1);
}
.para1
{
float:right;
}
.jpg1
{

float:left;
}
</style>
<script>
function addrecord()
{
var x=document.getElementById("first").value;
var y=document.getElementById("last").value;
var z=document.getElementById("email").value;
var w=document.getElementById("password").value;
<?php 
$servername="localhost";
$dbname="d_b";
$username="root";
$password="root123";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error)
{
die("connection failed due to".$con->connect_error);
}
else
{

}
?>
}
</script>
</head>
<body>
<div class="demo">


<img src="logo.jpg" class="img1" width=150px height=100px>
<a href="#about" class="anchor1">ABOUT</a>
<a href="#talks" class="anchor2">TALKS</a>
<a href="#event" class="anchor3">EVENT</a>
<a href="#" class="anchor4">WORKSHOP</a>
<a href="#" class="anchor5">CONTACT</a>
<a href="#" class="anchor6">GALLERY</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  LOGIN
</button>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ENTER YOUR DETAILS </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="form-group">
<label><h3 class="label1">First Name</h3>:</label>
<input type="text" class="first" id="first" placeholder="enter your first name"><br>
</div>
<div class="form-group">
<label><h3 class="label2">Last Name</h3>:</label>
<input type="text" class="last" id="last" placeholder="enter your last name"><br>
</div>
<div class="form-group">
<label><h3 class="label3">Email</h3>:</label>
<input type="text"  class="email" id="email" placeholder="enter your email"><br>
</div>
<div class="form-group">
<label><h3 class="label4">Password</h3>:</label>
<input type="text" class="password"  id="password" placeholder="enter your password">
      </div>
</div>
 <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">submit</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="deleteRecord()">forget password</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="jpg1">
<img src="india1.jpg">
</div>
<div class="demo2">
<a name="about"></a>
<h1>ABOUT</h1>
<p class="para1">A blockchain,[1][2][3] originally block chain,[4][5] is a growing list of records, called blocks, which are linked using cryptography.[1][6] Each block contains a cryptographic hash of the previous block,[6] a timestamp, and transaction data (generally represented as a merkle tree root hash).

By design, a blockchain is resistant to modification of the data. It is "an open, distributed ledger that can record transactions between two parties efficiently and in a verifiable and permanent way".[7] For use as a distributed ledger, a blockchain is typically managed by a peer-to-peer network collectively adhering to a protocol for inter-node communication and validating new blocks. Once recorded, the data in any given block cannot be altered retroactively without alteration of all subsequent blocks, which requires consensus of the network majority. Although blockchain records are not unalterable, blockchains may be considered secure by design and exemplify a distributed computing system with high Byzantine fault tolerance.</p>
</div>
<div class="demo3">
<a name="talks"></a>
<h1 class="talks">TALKS</h1>
<div class="photos" id="photos">
<img src="logo.jpg" class="src1" id="photos1" width=890px height=300px>
</div>
</div>
<script>
var photos=[
"logo1.jpg",
"logo2.jpg" ]; 
var i=0;
function slideshow()
{
document.getElementById("photos1").src=photos[i];
if(i<(photos.length-1))
i++;
else
i=0;
}
setInterval(slideshow,2000);
</script>
<div class="demo4">
<a name="event"></a>
<h1>EVENTS</h1>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script>
</body>
</html>