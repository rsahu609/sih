<?php
  include 'auth.php';
  $idea=$_REQUEST['title'];
  $des=$_REQUEST['des'];
  $city=$_REQUEST['city'];
  $state=$_REQUEST['state'];
  $zip=$_REQUEST['zip'];
  $temp=$_FILES['img']['tmp_name'];
  $loc_img=uniqid();
  if (!move_uploaded_file($temp,$loc_img)) {
    $ar=array('status'=>'Error');
    echo json_encode($ar);
    exit();
  }
  $connect=mysqli_connect('localhost','root','','sih');
  $query="insert into a_submit values('$_SESSION[user]','$idea','$des','$img','$long','$lat','0','$city','$state','$zip')";
  $result=mysqli_query($connect,$query);
  if ($result) {
    $ar=array('status' => 'SUCCESS');
    echo json_encode($ar);
  } else {
    $ar=array('status'=>'Error');
    echo json_encode($ar);
  }
?>
