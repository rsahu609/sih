<script src="js/popper.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<table class="table table-striped" style="table-layout:fixed">
    <thead>
        <tr>
            <th scope="col">State</th>
            <th scope="col">Image</th>
            <th scope="col">Activity</th>
            <th scope="col" style="max-width:'200px';text-overflow:ellipsis;overflow:hidden;">Date</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody id="submit-container">

    </tbody>
</table>



<div id="map" style="width:800px;height:500px;margin:auto;"></div>

<script id="submit-template" type="text/handlebar">
{{#each activity}}
<tr id="row{{post_id}}">
  <td>{{state}}</td>
  <td><img src="{{image}}" class="rounded mx-auto" height=50px></td>
  <td>{{idea}}</td>
  <td>{{date}}</td>
  <td class="description-overflow" style="max-width:'200px';text-overflow:ellipsis;overflow:hidden;">{{description}}</td>
  <td><button class="btn btn-primary view-btn" data-toggle="modal" data-postid="{{post_id}}" data-target="#myModal{{post_id}}">View</button></td>
  </tr>
  {{/each}}
</script>
<script>
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
        }).done(function(response) {
            var context = response;
            console.log(response);
            response.activity.forEach(function(act) { act.date = act.date_time.substr(0,10) });
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
        }).done(function(response) {
            $.get('api/submission_modal.html').then(function(modal) {
                var template = Handlebars.compile(modal);
                var context = response;
                console.log(response);
                var html = template(context.activity);
                $('body').prepend(html);
                $(`#myModal${response.activity.post_id}`).modal('show');
                $(`#myModal${response.activity.post_id}`).on('hidden.bs.modal', function(e) {
                  $(this).remove();
                });
            });
        });
    });
    $('.form-control').on('focus', function() {
        this.closest('.form-group').classList.add('active');
    });
    $('.form-control').on('blur', function() {
        this.closest('.form-group').classList.remove('active');
    });
</script>
