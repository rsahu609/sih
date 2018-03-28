<?php
  $find=$_POST['post_id'];
  include 'connection.php';
  $query = "SELECT `user_id`, `idea`, `description`, `image`, `city`,`policy_organization`, `state`, `_procedure`, `policy_details`, `project_budget`, `latitude`,`equipments`, `longitude`, `status`, `upvote` FROM `a_submit` WHERE post_id='$find'";
  $row=mysqli_query($connect,$query);
  $result = mysqli_fetch_assoc($row);
  echo json_encode($result);

?>
