<?php

$uniqid = uniqid();
$source = $_FILES['image']['tmp_name'];
$target = "../uploads/$uniqid.jpg";
$success = move_uploaded_file($source, $target);

if($success) {
  echo json_encode(array(
    'status'=>'success'
  ));
} else {
  echo json_encode(array(
    'status'=>'fail'
  ));
}
