<?php
include_once("koneksi.php");

if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $query = "INSERT INTO tbltest(nim,nama,hp,email,jk,alamat) VALUES('$nim','$nama','$hp','$email','$jk','$alamat')";
    $result = mysqli_query($mysqli, $query);
    if($result){
        echo "Successfully Added";
        header("Location: ../index.php");
    }
}
?>