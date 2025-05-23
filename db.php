<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "ITiProgerPlatform";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Қосылу қатесі: " . $conn->connect_error);
}
?>
