<?php
$mysqli = new mysqli("localhost","root","","bai3_ltw");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} 
?>