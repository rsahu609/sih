<?php session_start();
  $user=$_REQUEST['user'];
  $pass=($_REQUEST['pass']);

$connect=mysqli_connect('localhost','root','','sih');
  $query="select * from a_login where username='$user' and password='$pass'";

$row=mysqli_query($connect,$query);
  if (!($data=mysqli_fetch_array($row))) {
      $ar=array('status'=>'Error');
      echo json_encode($ar);
    } else {
      $_SESSION['user']=$user;
      $_SESSION['role']=$data['role'];
      $ar=array('status' => 'SUCCESS');
      echo json_encode($ar);
    }
?>
