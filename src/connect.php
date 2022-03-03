<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbName="store";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully<br><br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage()."<br>";
}
