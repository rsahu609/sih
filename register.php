
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="UI - -design by Rajan Sahu">
    <link rel="icon" href="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-register">
      <img class="md-4" src="img/fluid%20drop.gif" alt="Preloader" width="300" height="200">
      <h1 class=" mb-3 font-weight-normal">Register</h1>
      <label for="phone" class="sr-only">Phone Number</label>
      <input type="number" id="number" class="form-control" placeholder="Mobile Number" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" placeholder="Password" required>
      
      <label for="inputPassword" class="sr-only">Comfirm Password</label>
      <input type="password" id="confpass" class="form-control" placeholder="Confirm Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p id="error-message" class="text-danger" style="display:none">Please check username and password</p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    <script src="js/jquery-2.2.4.js"></script>
    <script>
      $('.form-register').on('submit' , function (e) {
        e.preventDefault();
         $('#error-message').fadeOut();
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
                document.location = 'index.php';
            } else {
                $('#error-message').fadeIn();
            }
        })
    });   
    </script>
  </body>
</html>
