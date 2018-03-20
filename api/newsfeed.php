<?php
 if( isset($_REQUEST['request'])){
     $password = 'password';
  $connect=mysqli_connect('127.0.0.1','root','','sih');
  $query="SELECT `user_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1'";
  $result=mysqli_query($connect,$query);
  $arr;
  $i=mysqli_num_rows($result);
  while($row = mysqli_fetch_assoc($result)){
      $i-=1;
      $arr[$i] = $row;
  }
  echo json_encode(array('activity'=>$arr));
 }
else if( isset($_REQUEST['state'])){
    $password = 'password';
  $connect=mysqli_connect('127.0.0.1','root',$password,'sih');
  $query="SELECT `user_id`, `idea`, `description`, `image`, `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE status='1' AND `state`='$_REQUEST[state]'";
  $result=mysqli_query($connect,$query);
  $arr;
  while($row = mysqli_fetch_assoc($result)){
      $arr[] = $row;
  }
  echo json_encode(array('activity'=>$arr));
 }
?>
