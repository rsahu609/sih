<?php
  $user=$_REQUEST['user'];
  $pass="#".$_REQUEST['pass'];
  $connect=mysqli_connect('localhost','id4970580_mhtgrwl5','13173356','sih');
  $query="select * from a_login where username=$user and pasword=$pass";
  $row=mysqli_query($connect,$query);
  if ($data=mysqli_fetch_array($row)) {
    $_SESSION['user']=$user;
      $ar=array('status' => 'SUCCESS');
      echo json_encode($ar);
    } else {
      $ar=array('status'=>'Error');
      echo json_encode($ar);
    }

?>
