<?php// if (session_status() == PHP_SESSION_NONE) {
    //session_start();}?>
<br><br>
<table class="table table-striped" style="table-layout:fixed">
    <thead>
        <tr>
            <th scope="col">Post ID</th>
            <th scope="col">User ID</th>
            <th scope="col" style="max-width:'200px';text-overflow:ellipsis;overflow:hidden;">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody id="submit-container">

    </tbody>
</table>
</div>
<br><br>
<!--div class="map col-md-8" ><h3>Innovations Near You</h3>
      <div id="map"></div-->
<!--------------------------- Javascript dependencies  ---------------------------------------------------------------------------------->
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>


<div id="map" style="width:800px;height:500px;margin:auto;"></div>

<script id="submit-template" type="text/handlebar">
    {{#each activity}}
    <tr>

        <td>{{post_id}}</td>
        <td>{{user_id}}</td>
        <td class="description-overflow" style="max-width:'200px';text-overflow:ellipsis;overflow:hidden;">{{description}}</td>
        <td>{{date}}</td>
        <td><button class="btn btn-primary view-btn" data-postid="{{post_id}}">View</button></td>

    </tr>
    {{/each}}
</script>


<script>
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

        });
    var source = $('#submit-template').html();
    var template = Handlebars.compile(source);
    $('document').ready(function() {
        var source = $('#submit-template').html();
        var template = Handlebars.compile(source);
        console.log("ready funciton called to load submissions");
        $.ajax({
                url: 'api/home_auth.php',
                method: 'post',
                data: {
                    request: 'bhai data de'
                },
                dataType: 'json',
            })
            .done(function(response) {
                console.log(source)
                var context = response;
                console.log(response)
                var html = template(context);
                console.log(html)
                $('#submit-container').html(html);
            });
    });
    $('body').on('click','.view-btn',function(){
       console.log($(this).data('postid'));
    })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>
<!-----------------------------Submmission template for authorities----------------------------------------------------->
