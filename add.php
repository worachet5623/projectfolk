<?php require_once('assets/pages/conn.php');?>
<?php 

$email = $_POST["email"];
$password = $_POST["password"];
$fullname = $_POST["fullname"];

echo $email.$password;




$sql = "INSERT INTO users (fullname,email, password)
VALUES ('$fullname','$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ";
}

$conn->close();


?>