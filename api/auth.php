<?php session_start();
  if (!isset($_SESSION['user'])) {
    http_response_code(403);
    exit();
  }
?>