<?php
//include('connection.php');

$connect = new PDO("mysql:host=localhost;dbname=sih",'sih','pa55w0rd');
function search_parsed($keyword) {
  global $connect;
  $query = "select * from a_submit where description like :keyword or _procedure like :keyword";
  $stmt = $connect->prepare($query);
  if(!$stmt) {
    error_log('Failed to prepare statement');
    http_response_code(500);
    return false;
  }
  $result = $stmt->execute(array(
    ':keyword'=>"%$keyword%",
  ));
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}

$keyword = $_GET['keyword'];

$result = search_parsed($keyword);
if($result) {
  echo json_encode(array('activity'=>$result));
} else {
  echo json_encode(array('activity'=>[]));
}
