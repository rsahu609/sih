<?php
    $p_id=$_POST['postid'];
    $user=$_POST['user'];
    include 'connection.php';
     /*to check already upvoted */
    $query = "SELECT id  FROM a_upvote WHERE post_id='$p_id' and username='$user'";
      $row = mysqli_query($connect,$query);
      if($id = mysqli_fetch_assoc($row) ) {
          $result = array('STATUS' => 'DOWNVOTED' );
          $query = "DELETE FROM a_upvote WHERE id ='$id[id]'";
          $res = mysqli_query($connect,$query);
          $query = "SELECT upvote FROM a_submit WHERE post_id='$p_id'";
          $qr=mysqli_query($connect,$query);
          $r=mysqli_fetch_assoc($qr);
          $up=$r['upvote'];
          if ($_SESSION['role']=='0') {
            $up-=1;
          } else {
            $up-=5;
          }
          $query="UPDATE a_submit SET upvote='$up' WHERE post_id='$p_id'";
          $update=mysqli_query($connect,$query);
      }
     else {
    $query = "SELECT upvote FROM a_submit WHERE post_id='$p_id'";
    $qr=mysqli_query($connect,$query);

    if ($qr)  {
      $r=mysqli_fetch_assoc($qr);
      $up=$r['upvote'];
      if ($_SESSION['role']=='0') {
        $up+=1;
      } else {
        $up+=5;
      }
      $query="UPDATE a_submit SET upvote='$up' WHERE post_id='$p_id'";
      $query2="INSERT INTO a_upvote VALUES('','$user','$p_id','')";
      $update=mysqli_query($connect,$query);
      $insert=mysqli_query($connect,$query2);
      if ($update && $insert) {
        $result = array('STATUS' => 'SUCCESS' , 'UPVOTES' => $up);
      }
        else {
        $result = array('STATUS' => 'ERROR' );
      }
    }
    }
    echo json_encode($result);
?>
