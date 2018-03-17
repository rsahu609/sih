<?php
 if( $_REQUEST['request']=='data'){
  $connect=mysqli_connect('127.0.0.1','root','','sih');
  $query="SELECT `user_id`, `idea`, `description`, `image`, `latitude`, `longitude`, `status` FROM `a_submit`";
  $result=mysqli_query($connect,$query);
  $arr;
  while($row = mysqli_fetch_assoc($result)){
      $arr[] = $row;
  }
  echo json_encode(array('activity'=>$arr));
 }
?>
