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
    <link href="img/leaves-with-water-droplets_1504589.png" rel="icon" type="image/png" />
    <title>Newsfeed - Aprakshan</title>
</head>
<style>
    #feed-container .card-img-top {
        height: 300px;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body>
    <?php  include('header.php');?>
    <?php  include('quotes.php');?>
    <div class="container">
      <div class="cardouter">
        <form>
            <div class="form-group row">
                <label for="filter" class="col-sm-6 col-form-label">
                  <span style="font-size:22px; margin-height:auto" class="h3">Filter activities by state</span>
                </label>
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
      <div class="card">
        <h5 class="card-header">Top post of the month</h5>
        <div class="card-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=CZ5bN85CO1k" allowfullscreen>
            </iframe>
          </div>
          <h6 class="card-title">Activity by user <a href="#">Rajan</a> from Raigarh, Chhattisgarh</h6>
          <p class="card-text">
            In this video, Rajan tells us about a new method of irrigation which saves water and time
          </p>
        </div>
      </div>
        <div class="row">
            <div class="col-md-8">
                <div id="map" style=""></div>
            </div>
            <div class="col-md-4">
              <p>Drag the map to desired area and click on the button to search on map</p>
              <button class="btn btn-primary" id="btn-map-search">Search in the shown area</button>
            </div>
        </div>
    </div>
</div>
   </div>
    <div class="template" id="entry-template" style="display:none;">
        {{#each activity}}
        <div class="card">
            <img src='{{image}}' class="mx-auto rounded" alt="{{image}}">
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
<?php include('go_to_top.html');?>
<?php include('footer.php');?>

</body>

</html>
