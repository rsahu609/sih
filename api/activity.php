<?php

include('../utils.php');
header('Content-Type: text/json');
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $activity = get_activities(null);
  echo json_encode(array('activity' => $activity));
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $uniqid = uniqid();
  $source = $_FILES['image']['tmp_name'];
  $target = "../uploads/$uniqid.jpg";
  $success = move_uploaded_file($source, $target);

  if(!$success) {
    http_response_code(500);
    echo json_encode(array(
      'error'=>'failed to upload file'
    ));
    exit();
  }
  list($lat, $long) = get_lat_long($target);
  if(!($lat and $long)) {
    http_response_code(400);
    echo json_encode(array(
      'error' => 'cannot get geotag from image'
    ));
    exit();
  }

  $result = save_activity(
    $_POST['title'],
    $_POST['description'],
    $image,
    $lat,
    $long,
    $_POST['state'],
    $_POST['city'],
    $_POST['pincode']
  );
  if ($result) {
    http_response_code(201);
  } else {
    http_response_code(500);
  }
}
