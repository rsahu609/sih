 <?php if(!isset($_SESSION['user'])){session_start();} ?>

    <h1 class="text-center"><img src="img/leaves-with-water-droplets_1504589.png"  style="padding:10px" height="80px" width="80px">My Submissions<img src="img/leaves-with-water-droplets_1504589.png"  style="padding:10px" height="80px" width="80px"></h1>
    <div id="accordion">
        Loading ...
    </div>
    <br><br>
    <!--div class="map col-md-8" ><h3>Innovations Near You</h3>
      <div id="map"></div-->
    <!--------------------------- Javascript dependencies  ---------------------------------------------------------------------------------->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <div id="map" style="width:800px;height:500px;margin:auto;"></div>
    
    <script type="text/Handlebars" id="card-template">
    
    {{#each activity}}
        <div class="card">
            <div class="card-header" id="heading{{post_id}}">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{post_id}}" aria-expanded="true" aria-controls="collapse{{post_id}}"> {{idea}} </button>
                </h5>
            </div>
            
            <div id="collapse{{post_id}}" class="collapse show" aria-labelledby="heading{{post_id}}" data-parent="#accordion">
                <div class="card-body">
                  <div class="">
                    
                    <img src="{{image}}" class="img-thumbnail" alt="{{idea}}" style="height:50px;">
                    
                  </div><span>
                  {{description}}
                  </span>
                </div>
                <a href="post.php?post_id={{post_id}}" style="float:right" target="_blank"><small>View full article</small></a>
            </div>
        </div>
  {{/each}}
  </script>

    <script>
        $('document').ready(function() {
          var map;
          function populateMap(context) {
            console.log(context.activity);
            if(!context.activity.length) {
              return;
            }
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
          $.getJSON('api/activity.php', function(response) {
            if(!response.activity.length) {
              $('#accordion').html('<p> Seems like you not posted any activity yet. You can post one by clicking <a href="submit.php">here</a></p>');
              return;
            }
            var source = $('#card-template').html();
            var template = Handlebars.compile(source);
            var html = template(response);
            $('#accordion').html(html);
            populateMap(response);
          });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY"></script>
