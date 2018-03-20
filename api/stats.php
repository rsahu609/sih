<?php
  $start;
  $end;
  $connect=mysqli_connect('127.0.0.1','root','password','sih');
<<<<<<< HEAD
  if (isset($_REQUEST['year'])) {
    $year=$_REQUEST['year'];
    $month=$_REQUEST['month'];
    if ($month>='1'&&$month<='9') {
      $start=$year."-0".$month."-01 00:00:01";
      $end=$year."-0".$month."-31 23:59:59";
    } else {
      $start=$year."-".$month."-01 00:00:01";
      $end=$year."-".$month."-31 23:59:59";
    }
    $query="SELECT COUNT(post_id),state FROM a_submit GROUP BY state WHERE  `date` BETWEEN '$start' AND '$end' ";

  } else {
    $query="SELECT COUNT(post_id), state FROM a_submit GROUP BY state";
  }
  $count=mysqli_query($connect,$query);
  $i=0;
  $arr;
  while(($a=mysqli_fetch_assoc($count))){
    $arr[$i]['state']=$a['state'];
    $arr[$i]['count']=$a['COUNT(post_id)'];
  }
  echo json_encode($arr);
  ?>
=======
  $query="SELECT COUNT(post_id), state FROM a_submit GROUP BY state";
  $count=mysqli_query($connect,$query);
  while(($a=mysqli_fetch_assoc($count))){
    print_r($a);
  }
?>
>>>>>>> 4271c88d54d53177ae87e5f163b0c09bd702d572
