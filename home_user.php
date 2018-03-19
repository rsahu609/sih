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
    <!--script src="bootstrap.bundle.js"></script-->
    <script>
        $('document').ready(function() {
            //$(':submit').css('background-color','red'); 
            //$('*').hide();
            $('a.disabled').hide();
            /*    $(':submit').click(function(e){
                $('.img-submit').html('')
                })
                */
        });
    </script>

    <div id="map" style="width:800px;height:500px;margin:auto;"></div>

    <script>
        /*-----------------------------MAP API CODE HERE----------------------------------------------------------*/
        $('document').ready(
            function myMap() {
                var location = new google.maps.LatLng(21.200437, 81.298213);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                    center: location,
                    zoom: 13
                };
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({
                    position: location
                });
                marker.setMap(map);
                var location = new google.maps.LatLng(21.1800, 81.2800);
                var marker = new google.maps.Marker({
                    position: location
                });
                marker.setMap(map);
                var location = new google.maps.LatLng(21.1922, 81.2822);
                var marker = new google.maps.Marker({
                    position: location
                });
                marker.setMap(map);
            });
        /*-------------------------AJAX RESPONSE CODES HERE -------------------------------------------------------------*/
        var source = $('#entry-template').html();
                var template = Handlebars.compile(source);
                $(document).ready(function() {
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
                        .done(function(response) {

                            console.log(source)
                            var context = response;
                            console.log(response)
                            var html = template(context);
                            console.log(html)
                            $('#feed-container').html(html);
                        })
                });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>