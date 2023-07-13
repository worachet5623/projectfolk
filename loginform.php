<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>

<body>
    <?php
    require_once('assets/pages/navbar.php');
    require_once('assets/pages/conn.php');
/*     if (!isset($_POST['email'], $_POST['password'])) {

    } else {
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        $sql = "SELECT * FROM users where email = '$email' and password = '$pwd' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['status'] = "1";
        } else {

        }
    } */

    ?>

    <div class="container bg-info">
        <section class="login-form">
            <div class="card">
                <div class="card-header">
                    <h1>Login Form</h1>
                    <span>Status :
                        <?php
                        if (!isset($_SESSION['status'])) {
                            echo 'ยังไม่ได้เข้าสู่ระบบ';
                        } else {
                            echo 'คุณเข้าสู่ระบบแล้ว';
                        }
                        ?>
                    </span>
                    <br>
                    <span class="text-danger">
                        <?php
                        if (!isset($_POST['email'], $_POST['password'])) {

                        } else {
                            $email = $_POST['email'];
                            $pwd = $_POST['password'];
                    
                            $sql = "SELECT * FROM users where email = '$email' and password = '$pwd' ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) == 1) {
                                
                                $_SESSION['status'] = "1";
                                header('location:index.php');
                                /* header("Refresh:0"); */
                            } else {
                                echo 'อีเมลล์หรือรหัสผ่านไม่ถูกต้องโปรดลองใหม่';
                            }}
                            ?>
                        
                    </span>
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input name="password" type="text" class="form-control" id="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
</body>

</html>