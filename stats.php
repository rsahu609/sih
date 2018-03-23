<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Statistics - Aprakshan</title>
</head>

<body>
    <?php  include('header.php');?>
    <div class="container">
        <canvas id="myChart" width="400" height="400" style="height: 400px; width: 400px"></canvas>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/handlebars.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/customchart.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script> -->
    <script>
       /* $('document').ready(
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
            }); */
    </script>
</body>

</html>
