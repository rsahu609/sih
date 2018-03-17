<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Newsfeed</title>
</head>
    <body>
<!-- Navigation Section for header file ---------------------------------------------------------------------------------- -->    
<?php  include('header.php');?>
<!-- Navigation Section End here---------------------------------------------------------------------------------------------------- -->

   
    <br><br>
<div class="card-deck" id="feed-container">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
  
    <br><br>
     <!--div class="map col-md-8" ><h3>Innovations Near You</h3>
      <div id="map"></div-->
<!--------------------------- Javascript dependencies  ---------------------------------------------------------------------------------->
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/handlebars.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>
<div id="map" style="width:800px;height:500px;margin:auto;"></div>
    <!--script src="bootstrap.bundle.js"></script-->   

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
<!--script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script-->
<!-- Google maps api experiment end here  ----------------------------------------------------------------------->
<!-- Card template-->

<div class="template" id="entry-template" style="display:none;">
    {{#each activity}}
    <div class="card">
      <img class="card-img-top" src="api/{{image}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{idea}}</h5>
        <p class="card-text">{{description}}</p>
      </div>
      <div class="card-footer">
      <small class="text-muted">{{status}}</small>
    </div>
    </div>
    {{/each}}
  </div>

<script>
 $(document).ready(function(){
     var source = $('#entry-template').html();
     var template = Handlebars.compile(source);
     console.log("ready funciton called");
 $.ajax({
    url: 'api/newsfeed.php',
    method: 'post',
    data: {
           request: 'data'
          },
    dataType: 'json',
 })
   .done(function(response){
      
     console.log(source)
        var context = response;
     console.log(response)
        var html = template(context);
     console.log(html)
        $('#feed-container').html(html);         
    })
 });        
</script>
      <!-- compilation code for templating
      var source   = document.getElementById("entry-template").innerHTML;
      var template = Handlebars.compile(source);
      var context = {title: "My New Post", body: "This is my first post!"};
      var html    = template(context);
  -->
    </body>
</html>