<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Update</title>

        <!-- bootstrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
</head>

<body>
    <div class="container-md">
        <form method="POST" action="../backend/edit.php">
            <div class="card-body">
                <h1>Update Mahasiswa</h1>
                <?php
                include_once "form.php";
                ?>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
    </div>
</body>

</html>