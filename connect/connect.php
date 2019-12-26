<?php

  // on server
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hotel_db";
  // on server

  // echo phpinfo();

  $conn = new mysqli($servername, $username, $password, $dbname);
  //$conn = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password);
  //$conn = new mysqli($servername, $port,$username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connect Database fail : " . $conn->connect_error);
  }
  $query = $conn->query("SET NAMES UTF8");

  date_default_timezone_set("Asia/Bangkok");
?>
