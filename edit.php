<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit member</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>

<body>
    <?php require_once('assets/pages/navbar.php'); ?>
    <?php require_once('assets/pages/conn.php'); ?>
    <?php
    $id = $_POST['idpost'];

    $sql = "SELECT id, fullname, password,email FROM users WHERE id='$id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $fullname = $row['fullname'];
            $email = $row['email'];
            $password = $row['password'];
        }
    } else {
        echo "0 results";
    }

    ?>
    <div class="container">

        <section class="main">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Form</h1>
                </div>
                <div class="card-body">
                    <form action="editdb.php" method="post">

                        <div class="mb-3">
                            <label for="id">ID</label>
                            <input name="id" type="text" class="form-control" id="id" value="<?php echo $id; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="fullname">Fullname</label>
                            <input name="fullname" type="text" class="form-control" id="fullname" value="<?Php echo $fullname; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" value="<?Php echo $email; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input name="password" type="text" class="form-control" id="password" value="<?Php echo $password; ?>">
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>

    </div>


</body>

</html>