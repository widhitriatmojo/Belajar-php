<?php 
	session_start();
	include "config.php";

	$ID = $_POST["ID_PRODUK"];
	$nama = $_POST["NAMA_PRODUK"];
	$varian = $_POST["VARIAN"];
    $harga =$_POST["HARGA"];

	if(move_uploaded_file($_FILES["tmp_name"])){
	$sql = "UPDATE produk SET NAMA_PRODUK='$nama',  
     VARIAN='$varian', HARGA='$harga' WHERE ID_PRODUK='$ID'";
	$hasil = mysqli_query($config, $sql);
	if($hasil){
	move_uploaded_file($lokasifile, $uploadfile);
	echo "<script> alert('Data berhasil diubah')</script>";
	echo "Nama File : <b>$namafile</b> sukses di 
      upload<br/><br/>";
	echo "<a href='produk.php'>kembali</a>";
	} else {
		echo "Data gagal disimpan";
		}
	} else {
		$sql = "UPDATE produk SET NAMA_PRODUK='$nama', 
           VARIAN ='$varian',HARGA='$harga' WHERE  
           ID_PRODUK=$ID";
		$hasil = mysqli_query($config, $sql);
		header('location:produk.php');
	}
?>


