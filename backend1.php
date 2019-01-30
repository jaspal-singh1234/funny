<?php 
$servername="localhost";
$username="root";
$pass="root123";
$dbname="d_b";

$con=new mysqli($servername,$username,$pass,$dbname);
extract($_POST);
if(isset($_POST['read_record']))
{
$data='<table class="table table-bordered table-striped>;
<tr>
<th>first name</th>
<th>last name</th>
<th>email</th>
<th>password</th>



<th>edit</th>
<th>delete</th>
</tr>';

}
$x=$_POST['first_name'];
$y=$_POST['last_name'];
$z=$_POST['email'];
$w=$_POST['password'];
$q="insert into insert1 (first_name,last_name,email,password) values ('$x','$y','$z','$w')";
$qq=$con->query($q);
/*if(isset($_POST['firstname']) && ($_POST['lastname']) && ($_POST['email']) &&  ($_POST['password']) )
{
$query="INSERT INTO insert1('first_name', 'last_name', 'email', 'password') VALUES ('$firstname','$lastname','$email','$password')";
mysqli_query($con,$query);
}*/
?>
