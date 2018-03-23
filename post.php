 <?php if((session_status() == PHP_SESSION_NONE)) session_start();?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="js/handlebars.min.js"></script>
     <meta charset="UTF-8">
     <title><?= $_REQUEST['idea']?></title>
 </head>
 <body>
     <?php include('header.php') ;?>
      <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <img src="images/{{image}}">
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2><?=$_REQUEST['idea']?></h2>
            <p><?=$_REQUEST['description']?></p>
          <div class="col-md-4">
            <h2><?=$_REQUEST['state_policy']?></h2>
            <p><?=$_REQUEST['state_policy']?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>equipments</h2>
            <p><?=$_REQUEST['equipments']?></p>
          </div>
        </div>
          </div>
        <hr>

      </div> <!-- /container -->

    </main>