<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // format data yang akan diparsing
    $data="\n$nim|$nama|$hp|$email|$jk|$alamat";

    // write ke mhs.txt
    $fh=fopen("../file/mhs.txt","a");
    fwrite($fh,$data);

    // close file
    fclose($fh);

    // redirect ke index.php
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script>window.location.href='../frontend/view-txt.php'</script>";
