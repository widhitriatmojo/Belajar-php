<?php
session_start();
include "config.php";

$nama = $_POST["user_nama"];
$password = $_POST["user_password"];
$email = $_POST["user_email"];

// Lakukan perubahan data di database tanpa mengubah gambar
$sql = "UPDATE user SET user_password='$password', user_email='$email' WHERE user_nama='$nama'";
$hasil = mysqli_query($config, $sql);
if ($hasil) {
    echo "<script>alert('Data berhasil diubah')</script>";
    header('location:user.php');
} else {
    echo "Data gagal disimpan";
}
?>