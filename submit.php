<?php session_start();

if(!isset($_SESSION['user'])){
        header('Location: login.php');
        exit();
}         ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Submit your Idea</title>
</head>

<body>
   <!-------------------------------------------------- Javascript dependencies  ------------------------------------------------------------------>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-------------------- Navigation Section for header file ---------------------------------------------------------------------------------- -->
    <?php include('header.php'); ?>
    <!-- Navigation Section End here---------------------------------------------------------------------------------------------------- -->
    <div class="form-container">
        <form id="form">
            <div class="form-row form">
                <div class="form-group col-md-12">
                    <br>
                    <label for="idea-title">Idea title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Idea title" autofocus>
                    <small class="text-muted">Enter the name of the idea or Context</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="des">Description</label>
                    <textarea class="form-control" name="des" id="des" placeholder="Enter Description here"></textarea>
                    <small class="text-muted">All the details regarding practical utility, budget, precautions and crop type, soil type(in case of irrigation ideas)</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="equip">List of Items and Equipments required</label>
                    <textarea class="form-control" name="equip" id="equip" placeholder="Enter Description here"></textarea>
                    <small class="text-muted">Number of Items with costs</small>
                </div>
                <div class="form-group col-md-12">
                    <label for="radio">Is there any policy or subsidy provided form government or any other <a href="#" data-toggle="tooltip" title="NGO's and various CWCs" data=placement="top">agencies</a> ?</label> 
                    <div>
                     <label for="yes">Yes </label>
                      <input type="radio" name="policy_radio" value="radio_true" id="yes"> 
                     <label for="no">No </label>
                      <input type="radio" name="policy_radio" value="radio_false" id="no">
                    </div>
                    <label for="policytitle"></label>
                    <input type="text" class="form-control policy_fields" name="policy_title" placeholder="Name of the organization who gives the subisidy or policy">
                    <small class="text-muted">Enter the name of the idea or Context</small>
                </div>
                <div class="form-group col-md-12">
                <textarea class="form-control policy_fields" name="policy" id="policy" placeholder="Details about the policy"></textarea>
                <small class="text-muted">If there are government subsidies or financial help provided, related to your project you should write it down here</small>
                </div>
            <div class="form-group col-md-5">
                <label for="budget">Approximate Budget</label>
                <input type="text" class="form-control" name="budget" id="budget" placeholder="Cost of the setup in Rupees">
                <small class="text-muted">Approximate bugdet of your project</small>
            </div>
            <div class="form-group col-md-7">
                <label for="city">District</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="District">
                <small class="text-muted">Place where is the idea implemented</small>
            </div>
            <div class="form-group col-md-8">
                <label for="state" for="state">State</label>
                <select id="state" name="state" id="state" class="form-control">
                    <option value="chhattisgarh">Chhattisgarh</option>
                    <option value="telangana" name="telangana">Telangana</option>
                    <option value="varanasi" name="varanasi">Varanasi</option>
                    <option value="West Bengal" name="West Bengal"></option>
                    <option value="Kerala" name="Kerala">Kerala</option>
                    <option value="Uttar Pradesh" name="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Punjab" name="Punjab">Punjab</option>
                </select>
                <small class="text-muted">Name of the state</small>
            </div>

            <div class="form-group col-md-4">
                <label for="pin">Zip</label>
                <input type="number" class="form-control" id="pin" min="100000" name="pin" maxlength="6" placeholder="Pin Code">
                <small class="text-muted">Enter pin code</small>
            </div>
            <div class="form-group col-md-12">
                <div class="custom-file">
                    <div class="img-submit"></div>
                    <label class="custom-file-label" for="customFile">Click here to Upload Image</label>
                    <input type="file" class="custom-file-input" id="file_submit" name="img">
                    <small class="text-muted">Here is some help</small>
                    <br><br>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    <div class="text-success" id="submitstatus" style="display:none;"></div>
                </div>
            </div>
            </div>
    </form>
    </div>
 
    <div class="map-container" style="padding: 10px;">
        <div id="map" style="width:800px;height:500px;margin:auto;"></div>
    </div>

    <script>
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
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi21mn-01q0jKWx3rkiho8rh5xWxvWPwY&callback=myMap"></script>
    <!-- Ajax data request with submitted data ------>
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
                    
                    } else {
                        $('#submitstatus').html('Some error occured. Please try submitting it again.');
                        $('#submitstatus').fadeIn();
    
                    }
                });
        });
        /*Form controll scripts ----------------------------------------------------------------*/
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