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

        <section class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nontuch</td>
                        <td>1234</td>
                        <td><a class="btn btn-warning" href="#" role="button">Edit</a></td>
                        <td><a class="btn btn-danger" href="#" role="button">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </section>

    </div>
</body>

</html>