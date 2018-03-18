<div class='header'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aprakshan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newsfeed.php">Newsfeed</a>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="submit.php">Submit Your Idea</a>
       </span>
      </li>
      <li class="nav-item">
       <span>
           <a class="nav-link" href="stats.php">Statistics</a>
       </span>
      </li>
      <?php
      if(isset($_SESSION['user'])) {
      echo    "<li class='nav-item dropdown'>";
      echo    "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$_SESSION[user]</a>";
      echo    "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
      echo    "<a class='dropdown-item' href='profile.php'>Profile</a>";
      echo    "<a class='dropdown-item' href='#'>Another action</a>";
      echo    "<div class='dropdown-divider'></div>";
      echo    "<a class='dropdown-item' href='#'>Something else here</a></div></li>";
    } else {
      echo '<li><a class="nav-link" href="login.php">Login</a></li>
      <li><a class="nav-link" href="register.php">Register</a></li>';
    }
    ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
