<?php

$servername = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'memsite';

try {
  $db = new PDO("mysql:host=localhost;port=3300;dbname={$dbname}", $dbuser, $dbpassword);

  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "DB 연결 성공";
} catch (PDOException $e) {
  echo $e->getMessage();
}