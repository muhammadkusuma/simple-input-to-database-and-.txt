<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View .TXT</title>
    <!-- mycss -->
    <link rel="stylesheet" href="../frontend/css/style.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- header -->
    <?php
    include "header.php"
    ?>
    <!-- end header -->
    <!-- navbar -->
    <?php
    include "navbar.php"
    ?>
    <!-- end navbar -->


    <!-- sidebar -->
    <?php
    include "sidebar.php"
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
                        echo "<a href=\"../frontend/txt.php?\">TAMBAH</a>";
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row_data=explode("\n",file_get_contents("../file/mhs.txt"));
                        foreach($row_data as $row){
                            $data=explode("|",$row);
                            echo "<tr>";
                            echo "<td>$data[0]</td>";
                            echo "<td>$data[1]</td>";
                            echo "<td>$data[2]</td>";
                            echo "<td>$data[3]</td>";
                            echo "<td>$data[4]</td>";
                            echo "<td>$data[5]</td>";
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
    include "footer.php"
    ?>
    <!-- end footer -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- sidebar js -->
    <script src="../frontend/js/script.js"></script>

</body>

</html>