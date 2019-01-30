<?php
$con=mysqli_connect('localhost','root',"root123");
mysqli_select_db($con,'d_b');
$x=$_POST['data'];
$q="select * from classes where mid='$x' "; 
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{
?>
<option>
 <?php   echo $row['class']; ?>
 </option>
<?php
}
?>