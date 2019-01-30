<?php
?>
<html>
<head>
<style>
#map
{
width:300px;
height:300px;
}
</style>
</head>
<body>
<div id="map">
</div>
<script>
function initMap()
{
var kolkata={ lat:22.572645,lng:88.363892};
var map=new google.maps.Map(document.getElementById("map"),
{
zoom:10,
center:kolkata
});
var marker=new google.maps.Marker
({
position:kolkata,
map:map
});
}
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
</body>
</html>