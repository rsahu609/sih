<?php session_start();
  if (isset($_REQUEST['postid'])) {
    $p_id=$_REQUEST['postid'];
    include 'connection.php';
    $query = "SELECT upvotes FROM a_submit WHERE post_id='$p_id'";
    $qr=mysqli_query($connect,$query);
    if ($qr)  {
      $r=mysqli_fetch_assoc($qr);
      $up=$r['upvotes'];
      if ($_SESSION['role']=='0') {
        $up+=1;
      } else {
        $up+=5;
      }
      $query="UPDATE a_submit SET upvotes='$up' WHERE post_id='$p_id'";
      $query2="INSERT INTO a_upvotes VALUES('','$_SESSION[user]','$p_id')";
      $update=mysqli_query($connect,$query);
      $insert=mysqli_query($connect,$query2);
      if ($update&&$insert) {
        $result = array('STATUS' => 'SUCCESS' , 'UPVOTES' => '$up');
      } else {
        $result = array('STATUS' => 'ERROR' );
      }
      echo json_encode($result);
    }
  }
?>
