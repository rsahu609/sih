<table class="table table-striped" style="table-layout:fixed">
    <thead>
        <tr>
            <th scope="col">Serial No.</th>
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

<script src="js/popper.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>


<div id="map" style="width:800px;height:500px;margin:auto;"></div>

<script id="submit-template" type="text/handlebar">
{{#each activity}}
<tr>
  <td>{{@key}}</td>
  <td>{{post_id}}</td>
  <td>{{user_id}}</td>
  <td class="description-overflow" style="max-width:'200px';text-overflow:ellipsis;overflow:hidden;">{{description}}</td>
  <td>{{date}}</td>
  <td><button class="btn btn-primary view-btn" data-toggle="modal" data-postid="{{post_id}}" data-target="#myModal{{post_id}}">View</button></td>
  </tr>
  {{/each}}
</script>
<script>
    $('document').ready({

        /*   function myMap() {

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

    }*/
    });
    var source = $('#submit-template').html();
    var template = Handlebars.compile(source);
    $('document').ready(function() {
        var source = $('#submit-template').html();
        var template = Handlebars.compile(source);
        $.ajax({
                url: 'api/home_auth.php',
                method: 'post',
                data: {
                    request: 'bhai data de'
                },
                dataType: 'json',
            })
            .done(function(response) {
                var context = response;
                var html = template(context);
                $('#submit-container').html(html);
            });
    });
    $('body').on('click', '.btn.btn-primary.view-btn', function() {
        $.ajax({
                url: 'api/home_auth.php',
                method: 'post',
                data: {
                    postid: $(this).data('postid')
                },
                dataType: 'json',
            })
            .done(function(response) {
                $.get('api/submission_modal.html').then(function(modal) {
                    var template = Handlebars.compile(modal);
                    var context = response;
                    console.log(response);
                    var html = template(context.activity);
                    $('body').prepend(html);
                    $(`#myModal${response.activity.post_id}`).modal('show');
                });
            });
    });
</script>
<script>

    $('.form-control').on('focus', function() {
        this.closest('.form-group').classList.add('active');
    });
    $('.form-control').on('blur', function() {
        this.closest('.form-group').classList.remove('active');
    });
</script><!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>-->
