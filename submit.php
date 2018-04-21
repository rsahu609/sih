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

    <title>Share your Activities</title>
</head>

<body>
    <?php include('header.php');?>
    <?php include('geotag_modal.html');?>
    <div class="container">
     <h2 class="text-center"><img src="img/leaves-with-water-droplets_1504589.png"  style="padding:10px" height="80px" width="80px">Share your Activity<img src="img/leaves-with-water-droplets_1504589.png"  style="padding:10px" height="80px" width="80px"></h2>
      <div class="form-container">
        <form id="form">
            <div class="form-row form">
                <div class="form-group col-md-12">
                    <br>
                    <label for="idea-title">Activity title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="अभ्यास का शीर्षक" required autofocus> 
                    <small class="text-muted">Enter the name of the idea or Context</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="des">Description</label>
                    <textarea class="form-control" name="des" id="des" placeholder="यहाँ प्रस्ताव का विवरण दर्ज करें" required></textarea>
                    <small class="text-muted">All the details regarding practical utility, budget, precautions and crop type, soil type(in case of irrigation activities)</small>
                </div>
                <div class="form-group col-md-12">
                    <label class="big">Define categories कृपया श्रेणियों को परिभाषित करें</label>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                    <input class="form-check-input form-control" type="checkbox" name="category[3]" value="3"> Home (घोरेलू) <br>
                    <input class="form-check-input form-control" type="checkbox" name="category[2]" value="2"> Industry (उद्योग) <br> 
                    <input class="form-check-input form-control" type="radio" name="RU" value="5" checked> Urban (शहरी) <br>
                    <input class="form-check-input form-control" type="radio" name="RU" value="4"> Rural (ग्रामीण) <br>                  </div>
                        <div class="col-md-6">
                    <input class="form-check-input form-control" type="checkbox" name="category[1]" value="1"> Agriculture (कृषि) <br>
                    <input class="form-check-input form-control" type="checkbox" name="category[6]" value="6"> River (नदी) <br>
                    <input class="form-check-input form-control" type="checkbox" name="category[7]" value="7"> Dam (बांध) <br>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="equip">List of Items and Equipments required</label>
                    <textarea class="form-control" name="equip" id="equip" placeholder="उपकरणों एवं वस्तुओं का विवरण यहाँ दर्ज करें"></textarea>
                    <small class="text-muted">Number of Items with costs</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="procedure">Procedure</label>
                    <textarea class="form-control" id="procedure" placeholder="प्रक्रिया का क्रमानुसार विवरण दीजिए"></textarea>
                    <small class="text-muted">Steps to imitate the activity</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="radio">Is there any policy or subsidy of government or any other <span data-toggle="tooltip" title="e.g. NGO's and various CWCs" data-placement="top" style="color: green;">agencies</span> ?
                      <br>(क्या सरकार या किसी अन्य <span data-toggle="tooltip" title="e.g. NGO's and various CWCs" data-placement="top" style="color: green;">एजेंसियों</span> की कोई नीति या सब्सिडी है?)
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
                <small class="text-muted">Approximate bugdet of your activity</small>
            </div>
           <div class="form-group col-md-7">
                <label for="city">District</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="जिला">
                <small class="text-muted">Place where is the activity implemented</small>
            </div>
            <div class="form-group col-md-8">
                <label for="state">State</label>
                <select id="state" name="state" required class="form-control">
                    <option value="">Choose State(राज्य चुनें)</option>
                    <option value="Andhra Pradesh" name="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh" name="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam" name="Assam">Assam</option>
                    <option value="Bihar" name="Bihar">Bihar</option>
                    <option value="Chhattisgarh" name="Chhattisgarh">Chhattisgarh</option>
                    <option value="Delhi" name="Delhi">Delhi</option>
                    <option value="Gujrat" name="Gujrat">Gujrat</option>
                    <option value="Karnatka" name="Karnatka">Karnatka</option>
                    <option value="Kerala" name="Kerala">Kerala</option>
                    <option value="Goa" name="Goa">Goa</option>
                    <option value="Haryana" name="Haryana">Haryana</option>
                    <option value="Himanchal Pradesh" name="Himanchal Pradesh">Himanchal Pradesh</option>
                    <option value="Jammu and Kashmir" name="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand" name="Jharkhand">Jharkhand</option>
                    <option value="Madhya Pradesh" name="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra" name="Maharashtra">Maharashtra</option>
                    <option value="Manipur" name="Manipur">Manipur</option>
                    <option value="Meghalaya" name="Meghalaya">Meghalaya</option>
                    <option value="Nagaland" name="Nagaland">Nagaland</option>
                    <option value="Odisha" name="Odisha">Odisha</option>
                    <option value="Punjab" name="Punjab">Punjab</option>
                    <option value="Rajasthan" name="Rajasthan">Rajasthan</option>
                    <option value="Sikkim" name="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu" name="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana" name="Telangana">Telangana</option>
                    <option value="Uttar Pradesh" name="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttrakhand" name="Uttrakhand">Uttrakhand</option>
                    <option value="West Bengal" name="West Bengal">West Bengal</option>
                </select>
                <small class="text-muted">Name of the state</small>
            </div>

            <div class="form-group col-md-4">
                <label for="pin">Zip</label>
                <input type="number" class="form-control" id="pin" min="100000" name="pin" maxlength="6" placeholder="पिन कोड">
                <small class="text-muted">Enter pin code</small>
            </div>
            <div class="form-group col-md-12">
                <div class="big">Upload Image :</div>
                <input type="radio" id="geo" class="form-check-input form-control" name="geo" value="Y" checked>Geotagged Image<br>
                <input type="radio" id="n_geo" class="form-check-input form-control" name="geo" value="N">Non-Geotagged Image
            </div>
            <div class="form-group col-md-12">
                <div class="custom-file">
                    <div class="img-submit"></div>
                    <label class="custom-file-label" for="customFile">Click here to Upload Image(चित्र अपलोड करने हेतु यहाँ क्लिक करें)</label>
                    <input type="file" accept="image/jpeg" class="custom-file-input form-control" id="file_submit" name="img">
                    <div class="small text-muted">Upload Image (<span data-toggle="tooltip" title="Images which also contain information where it is clicked" data-placement="top" style="color: green;">Geotagged</span> recommended)</div>
                    <br><br>
                    <div class="text-success" id="manualaddress" style="display:none;">
                        <input id="pac-input" class="controls form-control" type="text" onblur="codeAddress()" placeholder="Search Location here">
                        <input type="hidden" id="lat" disabled="disabled" name="lat">
                        <input type="hidden" id="long" disabled="disabled" name="long">
                        <div id="map" height="500"></div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    <button class="btn btn-info" id="modal-btn" style="float:right" data-toggle="modal" data-target="#samplemodal">See Sample Submission</button>
                    <div class="text-success" id="submitstatus" style="display:none;"></div>
                </div>
            </div>
            </div>
    </form>
    </div>
  </div>

    <!-- Ajax data request with submitted data -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/geo_loc.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1sAjyD_NDrgsRGt_9ZLqf41Tu0QGTzqI&libraries=places&callback=initAutocomplete" async defer></script>
    <script>
        
    window.populateMap = function(context) {
        //console.log(context.activity);
        var geocoder = new google.maps.Geocoder;
        var marker;
        var location;
        location = (new google.maps.LatLng($('#lat').val(),$('#long').val()));
       //   context.activity.forEach(function(activity) {
       //       locations.push(new google.maps.LatLng(activity.latitude, activity.longitude));
       //   });
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: location,
            zoom: 6
        };
        map = new google.maps.Map(mapCanvas, mapOptions);
        google.maps.event.addListener(map, "click", function (e) {
            //lat and lng is available in e object
            console.log(map);

            var latLng = e.latLng;
            location = (new google.maps.LatLng(latLng.lat(), latLng.lng()));
            marker.setMap(null);
            marker = (new google.maps.Marker({ position: location }));
            marker.setMap(map);
            console.log(marker);
            console.log(latLng.lat(), latLng.lng());
        });
        var marker = (new google.maps.Marker({ position: location }));
        marker.setMap(map);
    }
        $('#submit').click(function(e) {
            e.preventDefault();
            $.ajax({
                    type: "POST",
                    url: "api/submit.php",
                    data: new FormData(document.getElementById('form')),
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                })
                .done(function(response) {
                    if (res.status== 'SUCCESS') {
                        $('#submitstatus')
                            .html('Successfully Submitted');
                        $('#submitstatus').fadeIn();
                        console.log('success runnning');

                    } else if (res.error == 'geotag not found') {
                        console.log('here');
                        var a='Location not accessible try adding it manually';
                        $('#submitstatus').html(a);
                        // $('#manualaddress').load('geo.php', function() {
                        //     //populateMap();
                        // });
                        console.log('geotag not found runnning');
                    
                        $('#manualaddress').fadeIn();
                        $('#submit').attr("disabled","disabled");
                        $('#submitstatus').fadeIn();
                    }else
                        {
                        $('#submitstatus').html('Some error occured. Please try submitting it again.');
                        $('#submitstatus').fadeIn();
                    }
                }).fail(function(response, body) {
                    if(response.responseJSON.error === 'geotag not found') {
                        console.log('this has ran');
                        $('#geotag').modal('show');
                        $('#manualaddress').fadeIn();
                        $('#lat').removeAttr('disabled');
                        $('#long').removeAttr('disabled');
                        populateMap();
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
        $('input[name=geo]').click(function(){
            if($(this).val()=='N') {
                $('#manualaddress').fadeIn();
                        $('#lat').removeAttr('disabled');
                        $('#long').removeAttr('disabled');
                        populateMap();
            }
            else{
                    $('#manualaddress').fadeOut();
                    $('#lat').attr('disabled','disabled');
                    $('#long').attr('disabled','disabled');
                }
            }
        );
 $(function () { $('[data-toggle="tooltip"]').tooltip() });/*To enable tooltip*/
    </script>
      <?php include('go_to_top.html');?>
       <?php include('footer.php');?>
</body>

</html>
