<?php
// $mysqli = new mysqli("localhost","root","","DA");
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "tlm";
$mysqli = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>