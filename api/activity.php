<?php
include('connection.php');
function get_submissions_by_user($userid) {
  global $connect;
  $query = "select * from a_submit where user_id = $userid";
  $result = mysqli_query($connect, $query);
  if(!$result) {
    error_log('Failed to get_submissions_by_user');
    http_response_code(500);
    exit();
  }

  while($row = mysqli_fetch_array($result)) {
    $data[] = $row;
  }

  return $data;
}

session_start();
$result = get_submissions_by_user($_SESSION['userid']);

echo json_encode(array(
  'activity' => $result
));
