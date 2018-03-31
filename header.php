<?php if((session_status() == PHP_SESSION_NONE)) session_start();?>
<div class='header' id="header">
<nav class="navbar navbar-expand-lg bg-blue fixed-top">
  <a class="navbar-brand mb-0 h1" href="newsfeed.php">Aprakshan</a>
  <button class="navbar-toggler glyphicon glyphicon-menu-hamburger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<script>/*To get url parameter*/
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};   
</script>
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
           <a class="nav-link" href="submit.php">Share Your Activity</a>
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
    <form action="search.php" method="get" class="form-inline my-2 my-lg-0" style="padding-right:10px;">
       <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
       <button class="btn bg-blue my-2 my-sm-0" id="search-btn" type="submit" role="Submit">Search</button>
    </form>
      <?php if(isset($_SESSION['user'])){?>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="api/logout.php">Logout</a>
       </span>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="profile.php"><?=ucfirst(strtolower($_SESSION['user'])) ?></a>
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
