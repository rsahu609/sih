<?php
  $user=$_REQUEST['user'];
  $pass=$_REQUEST['pass'];
  $mob=$_REQUEST['no'];
  $connect=mysqli_connect('localhost','root','','sih');
  $query_usrcheck="select * from a_login where username='$user'";
  $r=mysqli_query($connect,$query_usrcheck);
  if ($r) {
    $re = array('status' => "NOAVAIL", );
  } else {
    $query="insert into a_login values('','$user','$pass','$mob','0')";
    $rs=mysqli_connect($connect,$query);
    if($rs){
      $s = array('status' => 'SUCCESS', );
      echo json_encode($s);
    } else {
      $s = array('status' => 'ERROR', );
      echo json_encode($s);
    }
  }
?>
