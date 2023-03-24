<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "cs5HuQhm9(5G$(2o";
$dbname = "business2_img";

try {
  $conn = new PDO(
    "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
    $userName,
    $userPassword
  );
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {
  echo "Sorry! You cannot connect to database";
}
