<?php session_start();

if(!isset($_SESSION['user'])){
        header('Location: login.php');
        exit();
}         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Submit your Idea</title>
</head>
    <body>
    
<!-------------------- Navigation Section for header file ---------------------------------------------------------------------------------- -->
    <?php include('header.php'); ?>
   <!-- Navigation Section End here---------------------------------------------------------------------------------------------------- -->
   <div class="form-container">
     <form id="form">
  <div class="form-row form">
    
  <div class="form-group col-md-12">
   <br>
    <label for="ideatitle">Idea title</label>
    <input type="text" class="form-control" name="title" id="idea-title" placeholder="Idea title" autofocus>
     <small class="text-muted">Enter the name of the idea or Context</small>
  </div>
  
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea  class="form-control" name="des" id="des" placeholder="Enter Description here" ></textarea>
     <small class="text-muted">All the information about the idea in detail</small>
  </div>
  <div class="form-group col-md-5">
      <label for="inputCity">District</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="District">
       <small class="text-muted">Where is the idea implemented</small>
  </div>
    <div class="form-group col-md-3">
      <label for="inputState">State</label>
      <select id="state" name="state" class="form-control">
        <option selected >Choose...</option>
        <option value="cg">Chhattisgarh</option><option value="tel" name="tel">Telangana</option><option value="vnsi" name="vnsi">Varanasi</option>
      </select>
       <small class="text-muted">Name of the state</small>
   </div>
    
   <div class="form-group col-md-4">
       <label for="inputZip">Zip</label>
      <input type="number" class="form-control" id="pin" min="100000" name="pin" maxlength="6" placeholder="Pin Code">
       <small class="text-muted">Enter pin code</small>
   </div>
   <div class="form-group col-md-12">
    <div class="custom-file">
    <div class="img-submit"></div>
       <label class="custom-file-label" for="customFile">Click here to Upload Image</label>
       <input type="file" class="custom-file-input" id="file_submit" name="img">
        <small class="text-muted">Here is some help</small>
       <br><br>
       <button type="submit" class="btn btn-primary" id="submit">Submit</button>
       <div class="value submitstatus text-success" style="display:none;">Successfully submitted</div>
     </div>
    </div>
   </div>
</form>
        </div>
<!-------------------------------------------------- Javascript dependencies  ------------------------------------------------------------------>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-2.2.4.js"></script>
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
  
   <div class="map-container" style="padding: 10px;">
    <div id="map" style="width:800px;height:500px;margin:auto;"></div>
   </div>

<script>
$('document').ready(
function myMap() {
  var location = new google.maps.LatLng(21.200437, 81.298213);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: location, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:location});
  marker.setMap(map);
  var location = new google.maps.LatLng(21.1800,81.2800);
  var marker = new google.maps.Marker({position:location});
  marker.setMap(map);
  var location = new google.maps.LatLng(21.1922,81.2822);
  var marker = new google.maps.Marker({position:location});
  marker.setMap(map);
}
);
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>
    <!-- Ajax data request with submitted data ------>
<script>
    $('#submit').click(function(e){
        e.preventDefault();
        $.ajax({
                type: "POST",
                url: "api/submit.php",
                data: new FormData(document.getElementById('form')),
            cache: false,
            processData: false,
            contentType: false
        })
            .done(function(){
            $('.submitstatus').fadeIn();
        });
    });
    /*Form controll scripts ----------------------------------------------------------------*/
    $('.form-control').on('focus', function() {
      this.closest('.form-group').classList.add('active');
    });
    $('.form-control').on('blur', function() {
      this.closest('.form-group').classList.remove('active');
    });
</script>
</body>
</html>