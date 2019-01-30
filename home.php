<?php
session_start();
if(!isset($_SESSION['z']))
header('location:http://localhost/jaspal/login.php');
?>
<html>
<body>
<h1>hello <?php echo $_SESSION['z']; ?></h1>
<a href="logout.php">logout</a> 
</body>
</html>