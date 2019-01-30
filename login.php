<?php
?>
<html>
<head>
<style>
.demo
{
color:red;
text-transform:capitalize;
font-size:20px;
}
.demo1
{
color:blue;
text-transform:capitalize;
font-size:20px;
}
.demo2
{
color:green;
}
</style>
</head>
<body>
<form action="validation.php" method="post">
<h1>Application form</h1>
<table border=0>
<tr>
<td class="demo">user name</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td class="demo1">password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td class="demo2"><input type="submit"></td>
</tr>
</table>
</body>
</html>