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
      $_SESSION['userid'] = $data['user_id'];
      $ar=array('status' => 'SUCCESS' , 'userid' => $data['user_id'] , 'user' => $data['username']);
      echo json_encode($ar);
    }
?>
