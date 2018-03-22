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
    <div class="container">
        <div class="row">
            <!----------------------------Carousels----------------------------------------------------->
            <div class="carousels col-lg-8">
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
            </div>

            <div class="cardouter col-lg-4">
                <!-------------------Carousels end here-->

                <div class="form-group">
                    <label for="filter">Select State</label>
                    <select class="form-control" id="filter">
<?php 
     $password = 'password';
  $connect=mysqli_connect('127.0.0.1','root',$password,'sih');
  $query="SELECT DISTINCT `state` FROM `a_submit` WHERE status='1'";
  $result=mysqli_query($connect,$query);
  $arr;
  while($row = mysqli_fetch_assoc($result)){
      $arr[] = $row;
 ?><option value="<?=$row['state']?>"><?=$row['state']?></option>
  <?php
  }
?>
    </select>
                </div>

                <div id="feed-container">
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
    <!---------------------------Map code-------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="map" style=""></div>
            </div>
        </div>
    </div>
            <!--script src="bootstrap.bundle.js"></script-->
            <!---------------------------Map code-------------------------------->

            <script>
                $('document').ready(
                    function myMap() {
                        var location = new google.maps.LatLng(21.1904, 81.2849);
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {
                            center: location,
                            zoom: 12
                        };
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                        var marker = new google.maps.Marker({
                            position: location
                        });
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
                        <small class="text-muted">{{city}}, {{state}}</small>
                        <button class="btn btn-primary" style="float:right">View</button>
                    </div>
                </div>
                {{/each}}
            </div>

            <script>
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

                            console.log(source)
                            var context = response;
                            console.log(response)
                            var html = template(context);
                            console.log(html)
                            $('#feed-container').html(html);
                        })
                })
            </script>
            <!-- compilation code for templating
      var source   = document.getElementById("entry-template").innerHTML;
      var template = Handlebars.compile(source);
      var context = {title: "My New Post", body: "This is my first post!"};
      var html    = template(context);
  -->
</body>

</html>