<?php 
session_start();
$_SESSION["fn"]=$_SESSION["a"];
$_SESSION["first_name"]=$_SESSION["f"];
$_SESSION["last_name"]=$_SESSION["l"];
$_SESSION["email"]=$_SESSION["e"];
$_SESSION["mobile_number"]=$_SESSION["m"];
?>
<html>
<head>
<script>
function fun()
{
var x=document.getElementById("foo");
x.submit();
}
window.onload=fun;
</script>
<body>







<form id="foo" action="deposit2.php" method="post">
<input  type="text" value=<?php echo "jaspal"  ?> name="fn1">
<input  type="text" value=<?php echo "jaspal"  ?> name="fn2">
<input  type="text" value=<?php echo "jaspal" ?> name="fn3">
<input  type="text" value=<?php echo "jaspal"  ?> name="fn4">
</form>
</body>
</html>