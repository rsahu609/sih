<?php
  $user=$_REQUEST['user'];
  $pass=$_REQUEST['pass'];
  $mob=$_REQUEST['no'];
  $connect=mysqli_connect('127.0.0.1','root','password','sih');
  $query="SELECT `username` FROM a_login WHERE username='$user'";
  $chk=mysqli_query($connect,$query);
  if ($chk) {
    echo json_encode(array('STATUS' => 'NOAVAIL'));
  } else {
    $query="INSERT INTO a_login VALUES('','$user','$pass','2','$mob')";
    if ($query) {
      echo json_encode(array('STATUS'=>'REGISTERED'));
    } else {
      echo json_encode(array('STATUS' => 'M_FAILED'));
    }
  }
?>
