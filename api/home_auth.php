<?php session_start();
  include 'connection.php';
  if (isset($_REQUEST['request'])) {
    $query="SELECT * FROM a_submit WHERE status='1'";
    $row=mysqli_query($connect,$query);
    if($row){
      $data="";
      while (($d=mysqli_fetch_assoc($row))) {
        $data[]=$d;
      }
      if ($data=="") {
        echo json_encode(array('STATUS' => 'm_success' , 'activity' => ''));
      } else {
        echo json_encode(array('STATUS' => 'm_success' , 'activity' => $data));
      }
    } else {
      echo json_encode(array('STATUS' => 'm_fail'));
    }
  } else if(isset($_REQUEST['postid'])) {
    $p_id=$_REQUEST['postid'];
    $query="SELECT * FROM a_submit WHERE post_id='$p_id'";
    $run=mysqli_query($connect,$query);
    if($run) {
      $a=mysqli_fetch_assoc($run);
      echo json_encode(array('activity' => $a));
    } else {
      echo json_encode(array('STATUS' => 'm_fail'));
    }
}
?>
