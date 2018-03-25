<?php session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="img/leaves-with-water-droplets_1504589.png" rel="icon" type="image/png" />

    <title>Share your Idea</title>
</head>

<body>
    <?php include('header.php');?>
    <div class="container">
      <div class="form-container">
        <form id="form">
            <div class="form-row form">
                <div class="form-group col-md-12">
                    <br>
                    <label for="idea-title">Idea title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="अभ्यास का शीर्षक" autofocus>
                    <small class="text-muted">Enter the name of the idea or Context</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="des">Description</label>
                    <textarea class="form-control" name="des" id="des" placeholder="यहाँ प्रस्ताव का विवरण दर्ज करें"></textarea>
                    <small class="text-muted">All the details regarding practical utility, budget, precautions and crop type, soil type(in case of irrigation ideas)</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="equip">List of Items and Equipments required</label>
                    <textarea class="form-control" name="equip" id="equip" placeholder="उपकरणों एवं वस्तुओं का विवरण यहाँ दर्ज करें"></textarea>
                    <small class="text-muted">Number of Items with costs</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="radio">Is there any policy or subsidy of government or any other <a href="#" data-toggle="tooltip" title="NGO's and various CWCs" data-placement="top">agencies</a> ?
                      <br>(क्या सरकार या किसी अन्य <a href="#" data-toggle="tooltip" title="NGO's and various CWCs" data-placement="top">एजेंसियों</a> की कोई नीति या सब्सिडी है?)
                    </label>
                    <div>
                     <label for="yes">Yes </label>
                      <input type="radio" name="policy_radio" value="radio_true" id="yes">
                     <label for="no">No </label>
                      <input type="radio" name="policy_radio" value="radio_false" id="no" checked>
                    </div>
                    <label for="policytitle"></label>
                    <input type="text" class="form-control policy_fields" name="policy_title" placeholder="सब्सिडी प्रदान करने वाले संगठन का नाम यहाँ दर्ज करे">

                    <small class="text-muted">Enter the name of organisation </small>
                </div>
                <div class="form-group col-md-12">
                <textarea class="form-control policy_fields" name="policy" id="policy" placeholder= "नीति के बारे में जानकारी यहाँ दर्ज करें"></textarea>
                <small class="text-muted">If there are government subsidies or financial help provided, related to your project you should write it down here</small>
                </div>
            <div class="form-group col-md-5">
                <label for="budget">Approximate Budget</label>
                <input type="text" class="form-control" name="budget" id="budget" placeholder="प्रस्ताव का अनुमानित मूल्य">
                <small class="text-muted">Approximate bugdet of your project</small>
            </div>
           <div class="form-group col-md-7">
                <label for="city">District</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="जिला">
                <small class="text-muted">Place where is the idea implemented</small>
            </div>
            <div class="form-group col-md-8">
                <label for="state">State</label>
                <select id="state" name="state" required class="form-control">
                    <option value="">Choose State(राज्य चुनें)</option>
                    <option value="chhattisgarh">Chhattisgarh</option>
                    <option value="telangana" name="telangana">Telangana</option>
                    <option value="varanasi" name="varanasi">Varanasi</option>
                    <option value="West Bengal" name="West Bengal">West Bengal</option>
                    <option value="Kerala" name="Kerala">Kerala</option>
                    <option value="Uttar Pradesh" name="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Punjab" name="Punjab">Punjab</option>
                </select>
                <small class="text-muted">Name of the state</small>
            </div>

            <div class="form-group col-md-4">
                <label for="pin">Zip</label>
                <input type="number" class="form-control" id="pin" min="100000" name="pin" maxlength="6" placeholder="पिन कोड">
                <small class="text-muted">Enter pin code</small>
            </div>
            <div class="form-group col-md-12">
                <div class="custom-file">
                    <div class="img-submit"></div>
                    <label class="custom-file-label" for="customFile">Click here to Upload Image(चित्र अपलोड करने हेतु यहाँ क्लिक करें)</label>
                    <input type="file" class="custom-file-input" id="file_submit" name="img">
                    <small class="text-muted">Here is some help</small>
                    <br><br>
                    <div class="text-success" id="manualaddress" style="display:none;"></div>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    <button class="btn btn-secondary" id="modal-btn" style="float:right" data-toggle="modal" data-target="#samplemodal">See Sample Submission</button>
                    <div class="text-success" id="submitstatus" style="display:none;"></div>
                </div>
            </div>
            </div>
    </form>
    </div>
  </div>

    <div class="map-container" style="padding: 10px;">
        <div id="map" style="width:800px;height:500px;margin:auto;"></div>
    </div>

  <!--  <script>
        $('document').ready( function(){
            $('.policy_fields').fadeOut();
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
            };
            console.log('function befor ready');
        });
            $('[data-toggle="tooltip"]').tooltip();
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>-->
    <!-- Ajax data request with submitted data -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1sAjyD_NDrgsRGt_9ZLqf41Tu0QGTzqI&libraries=places&callback=initAutocomplete" async defer></script>
    
    <script>
        $('#submit').click(function(e) {
            e.preventDefault();
            $.ajax({
                    type: "POST",
                    url: "api/submit.php",
                    data: new FormData(document.getElementById('form')),
                    cache: false,
                    processData: false,
                    contentType: false
                })
                .done(function(response) {
                    var r=JSON.parse(response);
                    if (r.status== 'SUCCESS') {
                        $('#submitstatus').html('Successfully Submitted');
                        $('#submitstatus').fadeIn();

                    } else if (r.STATUS== 'GEO ACCESS FAILED') {
                        var a='Location not accessible try adding it manually';
                        $('#submitstatus').html(a);
                        $('#manualaddress').load('geo.php');
                        $('#manualaddress').fadeIn();
                        $('#submitstatus').fadeIn();
                    }else
                        {
                        $('#submitstatus').html('Some error occured. Please try submitting it again.');
                        $('#submitstatus').fadeIn();
                    }
                });
        });
         $('#modal-btn').click(function(e) {
            e.preventDefault();
            $('#samplemodal').length || $.ajax('sample_submit.php').done(function(response) {
                $('body').prepend(response);
                $('#samplemodal').modal('show');
            })
         });
        /*Form controll scripts ----------------------------------------------------------------*/
                $('.policy_fields').fadeOut();
        $('.form-control').on('focus', function() {
            this.closest('.form-group').classList.add('active');
        });
        $('.form-control').on('blur', function() {
            this.closest('.form-group').classList.remove('active');
        });
        $('input[name=policy_radio]').click(function(){
            if($(this).val()=='radio_true') {
                $('.policy_fields').fadeIn();
            }
            else{
                $('.policy_fields').fadeOut();
            }
        })
    </script>
</body>

</html>
