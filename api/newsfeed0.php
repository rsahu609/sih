<?php

  include 'connection.php';
  $arr;
  $query;
if( isset($_REQUEST['request'])){
  $query = "SELECT `user_id`,`post_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1'";
  $result=mysqli_query($connect,$query);
  while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
  }
  echo json_encode(array('activity'=>$arr));
} else if( isset($_REQUEST['state'])){
  if($_REQUEST['state']=='all'){
    $query="SELECT `user_id`,`post_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1' ";
  } else {
    $query="SELECT `user_id`,`post_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1' AND `state`='$_REQUEST[state]'";
  }
  $result=mysqli_query($connect,$query);

  while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
  }

  echo json_encode(array('activity'=>$arr));
}
?>
