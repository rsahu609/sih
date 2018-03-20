<?php
  $connect=mysqli_connect('127.0.0.1','root','','sih');
  $query="SELECT COUNT(DISTINCT state) FROM a_submit";
  $count=mysqli_query($connect,$query);
  print_r(mysqli_fetch_array($count));
?>
