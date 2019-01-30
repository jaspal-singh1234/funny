<?php
?>
<html>
<head>
</head>
<body>
<p id="demo1"></p>
<script>
var obj,dbparam,xmlhttp;
obj={"table":"customer","limit":10};
dbparam=JSON.stringify(obj);
xmlhttp=new XMLHttp Request();
xmlhttp.onreadystatechange=function()
{
if(this.readystate==4 && this.status==200)
{
var xy=document.getElementById("demo1").innerHTML=this.responseText;
}
}
xmlhttp.open("GET","jsondemo.php?
</script>
</body>
</html>