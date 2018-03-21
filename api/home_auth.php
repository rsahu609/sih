<?php session_start();
  $connect=mysqli_connect('127.0.0.1','root','password','sih');
  $query="SELECT * FROM a_submit WHERE status='1'";
  $row=mysqli_query($connect,$query);
if($row){  
    $data;
  while (($d=mysqli_fetch_assoc($row))) {
    $data[]=$d;
  }
  echo json_encode(array('STATUS'=>'m_success','activity'=>$data));
} else {
  echo json_encode(array('STATUS' =>'m_fail'));
}
?>
