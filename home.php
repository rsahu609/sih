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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/handlebars.min.js"></script>
    <link href="img/leaves-with-water-droplets_1504589.png" rel="icon" type="image/png" />
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
           /*FOR ADMIN*/
    ?>
    </div>
    <?php include('footer.php');?>
    <?php include('go_to_top.html');?>
</body>
</html>
