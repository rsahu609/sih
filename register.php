<?php session_start(); if(isset($_SESSION['user'])) header('Location: newsfeed.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="UI - -design by Rajan Sahu">
    <link rel="icon" href="">
    <link href="img/leaves-with-water-droplets_1504589.png" rel="icon" type="image/png" />
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-register">
        <a href="newsfeed.php"><img class="md-4" src="img/fluid%20drop.gif" alt="Preloader" width="300" height="200"></a>
      <h1 class=" mb-3 font-weight-normal">Register</h1>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" class="form-control" style="border-bottom-left-radius:0;border-bottom-right-radius:0;" placeholder="Username" required autofocus>
      
      <label for="phone" class="sr-only">Phone Number</label>
      <input type="number" id="number" class="form-control" style="border-radius:0;" placeholder="Mobile Number" required>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" style="border-radius:0;" placeholder="Password" required>
      
      <label for="inputPassword" class="sr-only">Comfirm Password</label>
      <input type="password" id="confpass" class="form-control" style="border-top-left-radius:0;border-top-right-radius:0;" placeholder="Confirm Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p id="error-message" class="text-danger" style="display:none"></p>
      <br>
      <a href="login.php" class="btn btn-light">Login Here (यहां लॉग इन करें)</a>
      <p class="mt-5 mb-3" style="color:fff;">Aprakshan &copy; 2017-2018</p>
    </form>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
      $('.form-register').on('submit' , function (e) {
        e.preventDefault();
         $('#error-message').fadeOut();
        if($('#password').val() == $('#confpass').val()){
        $.ajax(
        {
            url: 'api/register.php',
            method: 'post',
            data: {
                no: $('#number').val(),
                user: $('#username').val(),
                pass: $('#password').val()
            },
            dataType: 'json'
            
        }).done(function(response){
            if(response.status == 'SUCCESS') {
                document.location = 'login.php';
            } 
            else if(response.status=='NOAVAIL'){
                $('#error-message').html('Username Not Available');
                $('#error-message').fadeIn();
            }
            else {
                $('#error-message').html('Some error occured! Please re-enter');
                $('#error-message').fadeIn();
            }
            });
         }          else{
                $('#error-message').html("Password doesn't match");
                $('#error-message').fadeIn();
          }
      });   
    </script>
    
  </body>
</html>
