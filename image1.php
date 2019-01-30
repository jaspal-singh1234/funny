<?php
 error_reporting(0);
?>
<html>
<head>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<h1>file uploading</h1>
<input type="file"  name="upload_file" value="">
<input type="submit" value="start" >
</form>
</body>
</html>
<?php



$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";
$con=new mysqli($servername,$username,$pass,$dbname);
 $file_name=$_FILES["upload_file"]["name"];
 $temp_name=$_FILES["upload_file"]["tmp_name"];
 $folder="student/".$file_name;
move_uploaded_file($temp_name,$folder);
echo "<img src='$folder' height='100' width='100'>";
$q="insert into image(pic) values($folder)";
$con->close();
?>