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
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aprakshan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Newsfeed</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="#">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="submit.php">Submit Your Idea</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
   <!-- Navigation Section End here---------------------------------------------------------------------------------------------------- -->
    <form>
  <div class="form-row form">
    <br><br>
     <div class="map col-md-8" ><h3>Innovations Near You</h3>
      <div id="map"></div>
     </div>
    </div>
    </form>
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
   
    <div id="map" style="width:800px;height:400px;margin:auto auto 100px auto;"></div>

<!--script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(21.1904, 81.2849),
    zoom:10,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script-->
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(21.1904, 81.2849),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("map"),mapProp);
}
</script>    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>


<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script-->

<!--script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script-->

   <!--  -->
    </body>
</html>