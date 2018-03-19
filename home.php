<?php if(isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Home</title>
</head>

<body>
    <?php  include('header.php'); /*HEADER FILE FOR NAVIGATION*/
    
    if($_SESSION['role'] == 2) /*FOR AUTHORITY*/
     include('home_auth.php');
        else if($_SESSION['role']==1) /*FOR USER*/
         include('home_user.php');
          else
              include('home_admin.php'); /*FOR ADMIN*/
    ?>
</body>

</html>