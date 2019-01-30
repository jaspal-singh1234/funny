<?php 
?>
<html>
<head>
</head>
<body>
<select  id="select1" onchange="func(this.value)">
<option>choose any option</option>
<option value="degree">degree</option>
<option value="classes">classes</option>
</select>
<p id="demo1"></p>
<script>
function func(datavalue)
{
var obj,dbparam,xmlhttp,myobj,txt="";
obj={table:datavalue, limit:2};
dbparam=JSON.stringify(obj);
xmlhttp=new XMLHttpRequest();



xmlhttp.onreadystatechange=function(){
if(this.readystate==200 && this.status==200)
{
myobj=JSON.parse(this.responseText);
txt+="<table border=1>";
for(x in obj)
{
txt+=">tr><td>myobj.['mid']; </tr></td>;
}
txt+="</table>";
document.getElementById("demo1").innerHTML=txt;
}
};
xmlhttp.open("POST", "json_demo_db_post.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("x=" + dbParam);
}
</script>
</body>
</html>