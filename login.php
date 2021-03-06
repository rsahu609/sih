<?php session_start(); if(isset($_SESSION['user'])) header('Location: newsfeed.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link href="img/leaves-with-water-droplets_1504589.png" rel="icon" type="image/png" />
    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <!-- Including Header file for navigation-------------------------------->
    <!-- Header file end ---------------------------------------------------->
    <div class="container">
    <form class="form-signin">
        <a href="newsfeed.php"><img class="md-4" id="fluid-gif" src="img/fluid%20drop.gif" alt="Fluid Drop Image" width="300" height="200"></a>
        <h1 class=" mb-3 font-weight-normal">Log In</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username (उपयोगकर्ता नाम)" required autofocus autocomplete="username">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password (पासवर्ड)" required autocomplete="current-password">

        <button class="btn btn-lg btn-primary btn-block" type="submit" role="submit">Sign in (साइन इन करें)</button>
        <br>
        <p id="error-message" class="text-danger" style="display:none;">Please check username and password</p>
        <a href="register.php" class="btn btn-light">Register Here (यहां रजिस्टर करें)</a>
        <p class="mt-5 mb-3" style="color:fff;">Aprakshan &copy; 2018-2019</p>
    </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $('.form-signin').on('submit', function(e) {
            e.preventDefault();
            $('#error-message').fadeOut();
            $.ajax({
                url: 'api/login.php',
                method: 'post',
                data: {
                    user: $('#username').val(),
                    pass: $('#password').val(),
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
        var gettext = require('gettext'),
            _ = gettext.gettext;

        gettext.loadLanguageFile('./locale/de/messages.po', 'de');
        gettext.loadLanguageFile('./locale/fr/messages.po', 'fr');

        gettext.setlocale('LC_ALL', 'de');

        console.log(_('Hello, World!'));

        gettext.setlocale('LC_ALL', 'fr');

        console.log(_('Hello, World!'));
    </script>

</body>

</html>
