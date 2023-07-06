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

    <div class="container">
        <h1>Form Add users</h1>

        <section class="main">
            <form action="" method="" >
                <div class="mb-3">
                    <label for="lableemail" class="form-label">Email address</label>
                    <input type="email" name="email" id="lableemail" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="labelpassword" class="form-label">Password</label>
                    <input type="password" name="password" id="labelpassword" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

    </div>
</body>

</html>