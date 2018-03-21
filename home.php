<?php session_start();
if(!(isset($_SESSION['user']))){
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
    <script src="js/handlebars.min.js"></script>
    <title>Home</title>
</head>

<body>
    <?php  include('header.php');?> <!--HEADER FILE FOR NAVIGATION-->
 <div class="container">
   <?php
    if($_SESSION['role'] == 2) /*FOR AUTHORITY*/
     include('home_auth.php');
        else if($_SESSION['role']==1) /*FOR USER*/
         include('home_user.php');
          else
            //include('home_admin.php'); /*FOR ADMIN*/
    ?>
    </div>
</body>
</html>
