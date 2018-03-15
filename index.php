<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Submit your Idea</title>
</head>
    <body>
<!-- Navigation Section for header file ---------------------------------------------------------------------------------- -->    
<?php  include('header.php');?>
<!-- Navigation Section End here---------------------------------------------------------------------------------------------------- -->

   
    <br><br>
     <!--div class="map col-md-8" ><h3>Innovations Near You</h3>
      <div id="map"></div-->
<!--------------------------- Javascript dependencies  ---------------------------------------------------------------------------------->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--script src="bootstrap.bundle.js"></script-->
   <script>
    $('document').ready(function(){
    //$(':submit').css('background-color','red'); 
    //$('*').hide();
    $('a.disabled').hide();
    $(':submit').click(function(e){
    $('.img-submit').html('')
    })
    });
  
</script>
   
<div id="map" style="width:800px;height:500px;margin:auto;"></div>

<script>
$('document').ready(
function myMap() {
  var location = new google.maps.LatLng(21.1904,81.2849);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: location, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:location});
  marker.setMap(map);
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>

<!--script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script-->

<!-- Google maps api experiment end here  ----------------------------------------------------------------------->
    </body>
</html>