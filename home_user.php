 <?php if(!isset($_SESSION['user'])){session_start();} ?>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Submission 1
        </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Description about the third submission - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Submission 2
        </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Description about the third submission - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Submission 3
        </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Description about the third submission - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
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
                  {{description}}
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
            var source = $('#card-template').html();
            var template = Handlebars.compile(source);
            var html = template(response);
            $('#accordion').html(html);
            populateMap(response);
          });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY"></script>
