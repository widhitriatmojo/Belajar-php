<?php 
include "config.php";
$user = $_GET['user_nama'];

$sql = "DELETE FROM user WHERE user_nama = '$user'";

$hasil = mysqli_query ($config, $sql);

echo "<script>
    alert('Data berhasil dihapus.');
    window.location.href='user.php';
    </script>";
?>