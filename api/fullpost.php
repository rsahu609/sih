<?php
  $find=$_POST['post_id'];
  $user = $_POST['user'];
  include 'connection.php';
  $query2= "SELECT * FROM a_upvotes WHERE username = $user AND post_id =$find";
  $query = "SELECT `user_id`, `idea`, `description`, `image`, `city`,`policy_organization`, `state`, `_procedure`, `policy_details`, `project_budget`, `latitude`,`equipments`, `longitude`, `status`, `upvote` FROM `a_submit` WHERE post_id='$find'";
  $row=mysqli_query($connect,$query);
  $result = mysqli_fetch_assoc($row);
  if(mysqli_query($connect,$query))
  {
      $up=array('upvote' => 'yes');
  }
else 
  {
      $up=array('upvote' => 'no');
  }
  echo json_encode($result,$up);
?>
