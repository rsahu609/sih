<?php
session_start();
$connect = mysqli_connect('127.0.0.1','root','password','sih');
$query = "SELECT DISTINCT `state` FROM `a_submit` WHERE status='1'";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($result)){
  $states[] = $row['state'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="img/leaves-with-water-droplets_1504589.jpg" rel="icon" type="image/png" />
    <title>Newsfeed - Aprakshan</title>
</head>

<body>
    <?php  include('header.php');?>
    <div class="container">
        <!-- <div class="carousels">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          -->


                <!-------------------Carousels end here-->



            <div class="cardouter">
              <form>
                <div class="form-group row">
                    <label for="filter" class="col-sm-6 col-form-label"><span style="font-size:22px; margin-height:auto">Filter entries by state</span></label>
                  <div class="col-sm-6" style="margin:auto;">
                    <select class="form-control form-control-sm" id="filter" style="padding:auto;">
                      <option value="all">All</option>
                      <?php
                      foreach($states as $state) {
                        echo "<option value='$state'>$state</option>";
                      }
                      ?>
                    </select>
                  </div>

                </div>
              </form>
                <div id="feed-container">
                  <p> Loading feed .. </p>
                </div>
            </div>
        </div>
   
    <div class="container">
        <button class="btn btn-primary float-right" id="btn-map-search">Search in the shown area</button>
        <div class="row">
            <div class="col-sm">
                <div id="map" style=""></div>
            </div>
        </div>
    </div>
    <div class="template" id="entry-template" style="display:none;">
        {{#each activity}}
        <div class="card">
            <img class="card-img-top" src="api/{{image}}" alt="{{image}}" style="image-size:cover;">
            <div class="card-body">
                <h5 class="card-title">{{idea}}</h5>
                <p class="card-text">{{description}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{city}}, {{state}}</small>
                <a class="" href="post.php?post_id={{post_id}}" style="float:right" target="_blank"><small>View full article</small></a>
            </div>
        </div>
        {{/each}}
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/handlebars.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY"></script>
    <script>
      (function(){
        var map;
        function populateMap(context) {
          console.log(context.activity);
          var locations = [];
          context.activity.forEach(function(activity) {
            locations.push(new google.maps.LatLng(activity.latitude, activity.longitude));
          });
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
              center: locations[0],
              zoom: 6
          };
          map = new google.maps.Map(mapCanvas, mapOptions);
          console.log(map);
          var markers = [];
          locations.forEach(function(location) {
            markers.push(new google.maps.Marker({ position: location }));
          });
          markers.forEach(function(marker) {
            marker.setMap(map);
          });
        }

        $('#btn-map-search').on('click', function() {
          const bounds = map.getBounds();
          $.getJSON('api/newsfeed.php', {
              request_type: 'search_in_lat_long_range',
              latstart: bounds.f.b,
              latend: bounds.f.f,
              longstart: bounds.b.b,
              longend: bounds.b.f
          }).then(function(response) {
            populateMap(response);
          });
        });
        var source = $('#entry-template').html();
        var template = Handlebars.compile(source);
        $(document).ready(function() {
            var source = $('#entry-template').html();
            var template = Handlebars.compile(source);
            $.ajax({
                    url: 'api/newsfeed.php',
                    method: 'post',
                    data: {
                        request: 'data'
                    },
                    dataType: 'json',
                })
                .done(function(response) {
                    var context = response;
                    var html = template(context);
                    $('#feed-container').html(html);
                    populateMap(context);
                })
        });
        $('#filter').on('change', function() {
            $.ajax({
                    url: 'api/newsfeed.php',
                    method: 'post',
                    data: {
                        state: this.value
                    },
                    dataType: 'json',
                })
                .done(function(response) {

                    var context = response;
                    var html = template(context);
                    $('#feed-container').html(html);
                    populateMap(context);
                })
        })
      })();
    </script>
<?php include('footer.php');?>
</body>

</html>
