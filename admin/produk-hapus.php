<?php  
include "config.php";
$id_beritanya = $_GET['ID_PRODUK'];

$sql = "DELETE FROM PRODUK WHERE ID_PRODUK='$id_beritanya'";

mysqli_query($config, $sql);
echo "<script>alert('Data berhasil dihapus')</script>";
header("location: produk.php");

?>