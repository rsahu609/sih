<?php
  include 'auth.php';
  $p_id=$_REQUEST['postid'];
  $state=$_REQUEST['status'];
  if ($state=='Approve') {
    $status=1;
  } else {
    $status=2;
  }
  include 'connection.php';
  $query=" update a_submit set status='$status' WHERE post_id='$p_id'";
  $res=mysqli_query($connect,$query);
  if ($res) {
    $ar = array('status' => 'Post '.$state.' Successfull');
    echo json_encode($ar);
  } else {
    $ar = array('status' => 'Failed to '.$state);
    echo json_encode($ar);
  }
 ?>
