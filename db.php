<?php
global $db;
$db = new mysqli("localhost", "root", "", "mydb");
$db->set_charset("utf8");
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
?>
