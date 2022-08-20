<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- mycss -->
    <link rel="stylesheet" href="./frontend/css/style.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- header -->
    <?php
    include "./frontend/header.php"
    ?>
    <!-- end header -->
    <!-- navbar -->
    <?php
    include "./frontend/navbar.php"
    ?>
    <!-- end navbar -->


    <!-- sidebar -->
    <?php
    include "./frontend/sidebar.php"
    ?>
    <!-- end sidebar -->


    <div class="p-4" id="main-content" style="height: 100vh;">
        <button class="btn btn-dark" id="button-toggle">
            <i class="bi bi-toggles"></i>
        </button>
        <div class="card mt-5">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h3>Daftar Mahasiswa</h3>
                        <?php
                        echo "<a href=\"../frontend/add.php?id=$row[id]\">TAMBAH</a>";
                        ?>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>HP</th>
                            <th>EMAIL</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("./backend/koneksi.php");
                        $query = mysqli_query($mysqli, "SELECT * FROM tbltest order by id desc");

                        while ($row = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['NIM'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['hp'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['jk'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";

                            echo "<td><a href=\"../frontend/edit.php?id=$row[id]\">Edit</a> | <a href=\"../backend/delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>



    <!-- footer -->
    <?php
    include "./frontend/footer.php"
    ?>
    <!-- end footer -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- sidebar js -->
    <script src="./frontend/js/script.js"></script>

</body>

</html>