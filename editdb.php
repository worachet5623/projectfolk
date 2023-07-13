<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>
<body>
<?php
require_once('assets/pages/conn.php');

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password= $_POST['password'];

$sql = "UPDATE users SET fullname='$fullname',email='$email',password='$password' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
    echo 'sucess';
      ;
} else {
    echo 'fail';
}

$conn->close();
?>
</body>
</html>