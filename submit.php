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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Newsfeed</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Submit Your Idea</a>
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
    
  <div class="form-group col-md-12">
   <br>
    <label for="ideatitle">Idea title</label>
    <input type="text" class="form-control" name="title" id="idea-title" placeholder="Idea title" autofocus>
  </div>
  
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" name="des" id="des" placeholder="Enter Description here" ></textarea>
  </div>
  <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="City">
  </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="state" class="form-control">
        <option selected >Choose...</option>
        <option value="cg">Chhattisgarh</option><option value="tel">Telangana</option><option value="vnsi">Varanasi</option>
      </select>
   </div>
    
   <div class="form-group col-md-2">
       <label for="inputZip">Zip</label>
      <input type="number" class="form-control" id="inputZip" min="6" name="pin" maxlength="6" placeholder="Pin Code">
   </div>
   <div class="form-group col-md-12">
    <div class="custom-file">
    <div class="img-submit"></div>
       <label class="custom-file-label" for="customFile">Choose file</label>
       <input type="file" class="custom-file-input" id="file_submit">
       <br><br>
       <button type="submit" class="btn btn-primary" id="submit">Submit</button>
     </div>
    </div>
   </div>
</form>
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
   <div class="map col-md-8" ><h3>Google Maps</h3>
    <div id="map"></div>
<div id="googleMap" style="width:800px;height:400px;margin:auto auto 100px auto;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script>
    $('#submit').onclick(function(){
        $.ajax({
           method: "POST",
           url: "post.php",
           data: { title: $('#idea-title').val(),
                   des: $('#des').val(), 
                   city: $('#city').val(), 
                   state: $('#state').val(), 
                   pin: $('#pin').val(),
                   img: $('#file_submit').val(),
                })
        .done(function(){
            alert("Successfully Submitted");
        })
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>

<!--script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script-->
    </div>
    </body>
</html>