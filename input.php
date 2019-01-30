<?php 
?>
<html>
<head>
<script>
$(document).ready(function()
{
var form=$('#myform');
$('#submit').click(function(){
$.ajax({
url:form.attr("action"),
type:"post",
data:$("myform input").serialize(),
success:function(data){
console.log(data);
}
});
});
</script>
</head>
<body>
<form id="myform" action="insert.php" method="POST">
name:<input type="text" id="t1" name="t1">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>