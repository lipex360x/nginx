<?php 
  $host = 'mysql';
  $user = 'root';
  $pass = 'root';
  $db = 'test_db';

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_error) {
    echo 'connection failed' . $conn->connect_error;
  }

  echo 'Successfully connected to MYSQL';
?>