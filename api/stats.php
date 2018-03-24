<?php

include 'connection.php';


function get_count_by_state($month=null, $year=null) {
  global $connect;
  $query = "select count(post_id) as cc, state from a_submit group by state";
  if($month && $year) {
    $query .= " where month(date_time) = $month and year(date_time) = $year";
  }

  $result = mysqli_query($connect, $query);
  if(!$result) {
    error_log("Failed to get_count_by_state");
    echo json_encode(array('status' => 'fail'));
    exit();
  }

  while(($row = mysqli_fetch_assoc($result))){
    $arr[$row['state']] = $row['cc'];
  }
  return $arr;
}


function get_count_by_category($month=null, $year=null) {
  global $connect;
  $query = "select count(post_id) as cc, category from a_submit group by category";
  if($month && $year) {
    $query .= " where month(date_time) = $month and year(date_time) = $year";
  }

  $result = mysqli_query($connect, $query);
  if(!$result) {
    error_log("Failed to get_count_by_category");
    echo json_encode(array('status' => 'fail'));
    exit();
  }

  while(($row = mysqli_fetch_assoc($result))){
    $arr[$row['category']] = $row['cc'];
  }

  return $arr;
}

$month = $_REQUEST['month'] ?? null;
$year = $_REQUEST['year'] ?? null;

$count_by_state = get_count_by_state($month, $year);
$count_by_category = get_count_by_category($month, $year);

echo json_encode(array(
  'by_state' => $count_by_state,
  'by_category' => $count_by_category,
));

$connect = null;
