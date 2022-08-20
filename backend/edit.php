<?php
include_once("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $query = "UPDATE tbltest SET nama='$nama', hp='$hp', email='$email', jk='$jk', alamat='$alamat' WHERE id=$id";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
}
?>