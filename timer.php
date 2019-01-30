<?php
?>
<html>
<head>
<script
  src="https://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"
  integrity="sha256-Wp3wC/dKYQ/dCOUD7VUXXp4neLI5t0uUEF1pg0dFnAE="
  crossorigin="anonymous"></script>
  <script src="jquery-2.2.1.min.js"></script>
<script>
$(document).ready(function()
{
var isPaused=false;
var time=0;
var t=window.setInterval(function()
{
if(!isPaused)
{
$("#result_shops").load('time1.php');


}


},1000);
$('.pause').on('click',function(e)
{
e.preventDefault();
isPaused=true;
});
$('.play').on('click',function(e)
{
e.preventDefault();
isPaused=false;
});
});
</script>
</script>
</head>
<body>
<div class="box" >
<h1><div class="sub_shops" >timer</div></h1>
<h1><div id="result_shops" ></div></h1>
<button class="pause">stop</button>
<button class="start">start</button>
</div>