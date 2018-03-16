<?php
  include 'auth.php';
  $idea=$_POST['title'];
  $des=$_POST['des'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['pin'];
  $temp=$_FILES['img']['tmp_name'];
  $loc_img=uniqid().".jpg";
  if (!move_uploaded_file($temp,$loc_img)) {
    $ar=array('status'=>'Error');
    echo json_encode($ar);
    exit();
  } else{
  $connect=mysqli_connect('localhost','root','','sih');
  $query="insert into a_submit values('','Rajan','$idea','$des','$loc_img','21.12221','83.31323','0','$city','$state','$zip')";
  $result=mysqli_query($connect,$query);
  if ($result) {
    $ar=array('status' => 'SUCCESS');
    echo json_encode($ar);
  } else {
    $ar=array('status'=>'Error');
    echo json_encode($ar);
  }
  }
?>