<?php
include('../utils.php');

error_log($_POST['username']);
if($result = check_login($_POST['username'], $_POST['password'])) {
  echo $result;
} else {
  http_response_code(403);
}

