<?php
  $user=$_REQUEST['user'];
  $pass=($_REQUEST['pass']);
  include 'connection.php';
  $query="select * from a_login where username='$user' and password='$pass'";

$row=mysqli_query($connect,$query);
  if (!($data=mysqli_fetch_array($row))) {
      $ar=array('status'=>'Error');
      echo json_encode($ar);
    } else {
      session_start();
      $_SESSION['user']=$user;
      $_SESSION['role']=$data['role'];
      $ar=array('status' => 'SUCCESS');
      echo json_encode($ar);
    }
?>
