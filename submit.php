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
    <form id="form">
  <div class="form-row form">
    
  <div class="form-group col-md-12">
   <br>
    <label for="ideatitle">Idea title</label>
    <input type="text" class="form-control" name="title" id="idea-title" placeholder="Idea title" autofocus>
  </div>
  
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea  class="form-control" name="des" id="des" placeholder="Enter Description here" ></textarea>
  </div>
  <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="City">
  </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="state" name="state" class="form-control">
        <option selected >Choose...</option>
        <option value="cg" name="cg">Chhattisgarh</option><option value="tel" name="tel">Telangana</option><option value="vnsi" name="vnsi">Varanasi</option>
      </select>
   </div>
    
   <div class="form-group col-md-2">
       <label for="inputZip">Zip</label>
      <input type="number" class="form-control" id="pin" min="6" name="pin" maxlength="6" placeholder="Pin Code">
   </div>
   <div class="form-group col-md-12">
    <div class="custom-file">
    <div class="img-submit"></div>
       <label class="custom-file-label" for="customFile" >Choose file</label>
       <input type="file" class="custom-file-input" id="file_submit" name="img">
       <br><br>
       <button type="submit" class="btn btn-primary" id="submit">Submit</button>
       <div class="value">Some Value to be changed by json</div>
     </div>
    </div>
   </div>
</form>
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
   <div class="map col-md-8" ><h3>Ideas near you</h3>
    <div id="map"></div>
<div id="googleMap" style="width:800px;height:400px;margin:auto auto 100px auto;"></div>

<!--script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script-->
<script>
    <!-- Ajas data request with submitted data ------>
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
            alert("Successfully Submitted");
        });
    });
</script>
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script-->

<!--script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script-->
    </div>
    </body>
</html>