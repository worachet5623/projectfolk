<?php
$servername = "206.189.45.133";
$username = "worachetroot";
$password = "e8b015236bc08c9d7f48d290334bc_LH_appaddict^!";
$dbname = "backup";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>