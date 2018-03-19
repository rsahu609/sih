
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="fluid-bg text-center">
    <!-- Including Header file for navigation-------------------------------->
    <!-- Header file end ---------------------------------------------------->
    <form class="form-signin">
        <a href="newsfeed.php"><img class="md-4" id="fluid-gif" src="img/fluid%20drop.gif" alt="Fluid Drop Image" width="300" height="200"></a>
        <h1 class=" mb-3 font-weight-normal">Log In</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
        <p id="error-message" class="text-danger" style="display:none;">Please check username and password</p>
        <a href="register.php" class="alert alert-primary">Register Here</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    <script src="js/jquery-2.2.4.js"></script>
    <script>
        $('.form-signin').on('submit', function(e) {
            e.preventDefault();
            $('#error-message').fadeOut();
            $.ajax({
                url: 'api/login.php',
                method: 'post',
                data: {
                    user: $('#username').val(),
                    pass: $('#password').val()
                },
                dataType: 'json'

            }).done(function(response) {
                if (response.status == 'SUCCESS') {
                    document.location = 'home.php';
                } else {
                    $('#error-message').fadeIn();
                }
            })
        });

    </script>
</body>

</html>
