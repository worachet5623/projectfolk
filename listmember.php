<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List member</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/bootstrap.js"></script>
    <!-- End Bootstrap -->
</head>

<body>
    <?php require_once('assets/pages/navbar.php'); ?>
    <?php require_once('assets/pages/conn.php'); ?>

    <div class="container bg-info">

        <section class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">email</th>
                        <th scope="col">password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                          
                        
                      
                      ?>

                    <tr>
                        <td><?Php echo $row["id"]  ?></td>
                        <td><?Php echo $row["fullname"]  ?></td>
                        <td><?Php echo $row["email"]  ?></td>
                        <td><?Php echo $row["password"]  ?></td>


                        <td>
                            <form action="edit.php" method="post">
                                <input type="hidden" name="idpost" id="" value="<?php echo$row["id"] ?>">
                            <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                        </td>


                        
                        <td>
                        <button href="edit.php" type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php 
                    }
                    } 
                      mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </section>

    </div>


</body>

</html>