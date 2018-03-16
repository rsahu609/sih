<?php
$debug = $debug ?? false;
$dbpath = $debug ? 'sih.sqlite' : $_SERVER['DOCUMENT_ROOT']."/sih.sqlite";
function get_lat_long($image) {
}

function check_login($username, $password) {
  global $dbpath;
  $db = new PDO("sqlite:$dbpath");
  $query = "select username, role from user where username = :username and password = :password";
  $statement = $db->prepare($query);

  $result = $statement->execute(array(
    ':username' => $username,
    ':password' => $password
  ));

  if(!$result) {
    error_log('Failed to check user authenticity');
    return false;
  }

  $data = $statement->fetch(PDO::FETCH_ASSOC);

  return $data ? json_encode($data) : false;

}


function save_activity($title, $description, $image, $lat, $long, $state, $city, $pincode) {
  global $debug;
  global $dbpath;
  $db = new PDO("sqlite:$dbpath");
  if(!$db) {
    error_log('Cannot connect to db');
    return false;
  }

  $query = "insert into activity(title, description, image, username, time, lat, long, state, city, pincode)".
    " values(:title, :description, :image, :username, :time, :lat, :long, :state, :city, :pincode)";
  $statement = $db->prepare($query);

  if(!$statement) {
    error_log('Failed to prepare statement');
    return false;
  }

  $username = $debug ? 'tester' : $_SESSION['username'];
  $time = time();

  $result = $statement->execute(array(
    ':title' => $title,
    ':description' => $description,
    ':image' => $image,
    ':username' => $username,
    ':time' => $time,
    ':lat' => $lat,
    ':long' => $long,
    ':state' => $state,
    ':city' => $city,
    ':pincode' => $pincode,
  ));

  if(!$result) {
    error_log('Failed to insert activity into database');
    return false;
  }
  return true;

}

function get_activities($params) {
  global $dbpath;
  $db = new PDO("sqlite:$dbpath");
  $query  = 'select * from activity';
  $statement = $db->prepare($query);
  $result = $statement->execute();
  if(!$result) {
    error_log('Failed to fetch activity from db');
    return false;
  }
  $data = $statement->fetchAll(PDO::FETCH_ASSOC);
  $data = $data or [];
  return $data;
}
