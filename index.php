<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>

<body>
    <?php require_once('assets/pages/navbar.php'); ?>
    
    <div class="container bg-info">
        <h1> Hello world </h1>
        
        <?php
        
        if(!isset($_SESSION['status'])){
            echo '<h2>'.'ยังไม่ได้เข้าสู่ระบบ'.'</h2>';
        }
        else{
            echo '<h2>'.'คุณเข้าสู่ระบบแล้ว'.'</h2>';
        }
        ?>
    </div>
</body>

</html>