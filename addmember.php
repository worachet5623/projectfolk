<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>

<body>
    <?php
    require_once('assets/pages/navbar.php');
    require_once('assets/pages/conn.php');

    if (!isset($_POST['email'], $_POST['fullname'], $_POST['password'])) {
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fullname = $_POST["fullname"];

        $sql = "INSERT INTO users (fullname,email, password)
VALUES ('$fullname','$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: ";
        }

        $conn->close();
    }
    ?>

    <div class="container">
        <h1>Form Add users</h1>

        <section class="main">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="lablefullname" class="form-label">Full name</label>
                    <input type="text" name="fullname" id="lablefullname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lableemail" class="form-label">Email address</label>
                    <input type="email" name="email" id="lableemail" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="labelpassword" class="form-label">Password</label>
                    <input type="password" name="password" id="labelpassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

    </div>
</body>

</html>