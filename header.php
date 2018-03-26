<?php if((session_status() == PHP_SESSION_NONE)) session_start();?>
<div class='header' id="header">
<nav class="navbar navbar-expand-lg bg-green fixed-top bg-light">
  <a class="navbar-brand" href="newsfeed.php">Aprakshan</a>
  <button class="navbar-toggler glyphicon glyphicon-menu-hamburger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newsfeed.php">Newsfeed </a>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="submit.php">Share Your Activites</a>
       </span>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="stats.php">
           Statistics</a>
       </span>
      </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user'])){?>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="api/logout.php">Logout</a>
       </span>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="profile.php"><?=ucfirst($_SESSION['user']) ?></a>
       </span>
      </li>
      <?php } else {?>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="login.php">Login</a>
       </span>
      </li>

         <?php }if(isset($_SESSION['role'])) if($_SESSION['role'] == 2){
          ?>
          <li class="nav-item">
       <span>
           <a id="authority" class="nav-link"><?="(Authority)" ?></a>
       </span>
      </li>
      <?php } ?>
   
    </ul>
  </div>
</nav>
</div>
