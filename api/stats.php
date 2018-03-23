<?php
  $start;
  $end;
  include 'connection.php';
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
    $arr[$a['state']]=$a['COUNT(post_id)'];
  }
  echo json_encode($arr);
  ?>
