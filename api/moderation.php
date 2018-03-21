<?php
  include 'auth.php';
  $p_id=$_REQUEST['post_id'];
  $state=$_REQUEST['status'];
  if ($state=='Accept') {
    $status=1;
  } else {
    $status=2;
  }
  include 'connection.php';
  $query=" update a_submit set status='$status' WHERE post_id='$p_id'";
  $res=mysqli_query($connect,$query);
  if ($res) {
    $ar = array('status' => 'Successful');
    echo json_encode($ar);
  } else {
    $ar = array('status' => 'Update failed');
    echo json_encode($ar);
  }
 ?>
