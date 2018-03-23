<?php

function search_in_lat_long_range($latstart, $latend, $longstart, $longend) {
  $db = mysqli_connect('localhost', 'root', 'password', 'sih');
  if(!$db) {
    error_log('Failed to connect to db');
    http_response_code(500);
    exit();
  }

  $query = "SELECT `post_id`, `user_id`, `idea`, `description`, `image`,".
    " `city`, `state`, `latitude`, `longitude`, `status` FROM `a_submit` WHERE".
    " status='1' and latitude between $latstart and $latend and longitude".
    " between $longstart and $longend";

  $resultset = mysqli_query($db, $query);
  if(!$resultset) {
    error_log('Failed to search_in_lat_long_range');
    http_response_code(500);
    exit();
  }

  while($row = mysqli_fetch_assoc($resultset)) {
    $data[] = $row;
  }

  return $data;
}

if($_GET['request_type'] == 'search_in_lat_long_range') {

  $latstart = $_GET['latstart'];
  $latend = $_GET['latend'];
  $longstart = $_GET['longstart'];
  $longend = $_GET['longend'];

  $data = search_in_lat_long_range($latstart, $latend, $longstart, $longend);
  echo json_encode(array(
    'activity' => $data,
  ));
  exit();
}


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
