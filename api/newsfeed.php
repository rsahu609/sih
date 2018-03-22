<?php
if( isset($_REQUEST['request'])){
  include 'connection.php';
  $query = "SELECT `user_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1'";
  $result=mysqli_query($connect,$query);
  while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
  }
  echo json_encode(array('activity'=>$arr));
} else if( isset($_REQUEST['state'])){
  $password = 'password';
  $connect=mysqli_connect('127.0.0.1','root',$password,'sih');

  if($_REQUEST['state']=='all'){
    $query="SELECT `user_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1' ";
  } else {
    $query="SELECT `user_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1' AND `state`='$_REQUEST[state]'";
  }

  $connect=mysqli_connect('127.0.0.1','root',$password,'sih');
  $result=mysqli_query($connect,$query);

  while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
  }

  echo json_encode(array('activity'=>$arr));
}
?>
