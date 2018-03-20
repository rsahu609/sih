<?php
  $connect=mysqli_connect('127.0.0.1','root','password','sih');
  $query="SELECT COUNT(post_id), state FROM a_submit GROUP BY state";
  $count=mysqli_query($connect,$query);
  while(($a=mysqli_fetch_assoc($count))){
    print_r($a);
  }
?>
