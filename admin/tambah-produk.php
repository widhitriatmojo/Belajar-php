<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <style>
body{
    padding: 20px;
}
.navbar{
    background-color: yellowgreen;
    height: 12vh;
    line-height: 45px;
    color: white;
}
.navbar-brand{
    color: #ffffff;
    margin-left:20px;
}
.btn{
    background-color: yellowgreen;
    color: #ffffff;
    margin-bottom: 20px;
    margin-left: 20px;
}
h3{
    margin-left:20px;
}
</style>

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container d-flex">
            <a class="navbar-brand" style="margin-left: 20px;" href="#"><b>Produk kripik pisang</b></a>
        </div>
    </nav>
    <br> 
    <div class="container">
        <h3><b>Tambah Produk</b></h3>
        <form action="tambah-produk.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3"  style="  padding-right: 20px;padding-left: 20px;">
                <label for="ID_PRODUK" class="form-label">ID PRODUK</label>
                <input type="text" class="form-control" id="ID_PRODUK" name="ID_PRODUK">
            </div>
            <div class="mb-3"  style="  padding-right: 20px;padding-left: 20px;">
                <label for="NAMA_PRODUK" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="NAMA_PRODUK" name="NAMA_PRODUK">
            </div>
            <div class="mb-3"  style="  padding-right: 20px;padding-left: 20px;">
                <label for="VARIAN" class="form-label">Varian Rasa</label>
                <input type="text" class="form-control" id="VARIAN" name="VARIAN">
            </div>
            <div class="mb-3"  style="  padding-right: 20px;padding-left: 20px;">
                <label for="HARGA" class="form-label">Harga</label>
                <input type="text" class="form-control" id="HARGA" name="HARGA">
            </div>
            <div class="mb-3"  style="  padding-right: 20px;padding-left: 20px;">
                <label for="filegambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="filegambar" name="filegambar">
            </div>
            <button type="submit" class="btn" name="simpan" value="Simpan">Tambahkan</button>
            <a href="produk.php" class="btn">Kembali ke Beranda</a>
        </form>
    </div>
<?php
if (isset($_POST['simpan'])) {
    include('config.php');
    $ID = $_POST['ID_PRODUK'];
    $nama = $_POST['NAMA_PRODUK'];
    $varian = $_POST['VARIAN'];
    $harga = $_POST['HARGA'];
    $gambar = basename($_FILES["filegambar"]["name"]);

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["filegambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Maaf, hanya file berekstensi JPG, JPEG, PNG & GIF yang diperbolehkan untuk diupload. ";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Maaf, file Anda gagal diupload.";
    } else {
        if (move_uploaded_file($_FILES["filegambar"]["tmp_name"], $target_file)) {
        echo "File " . htmlspecialchars(basename($_FILES["filegambar"]["name"])) . " berhasil diupload.";
    } else {
        echo "Maaf, ada error ketika mengupload file Anda.";
    }
}
    if ($uploadOk == 1) {
        $sql = mysqli_query($config, "INSERT INTO produk (ID_PRODUK,NAMA_PRODUK, VARIAN, HARGA, GAMBAR, STOK) VALUES ($ID,'$nama','$varian','$harga','$gambar','')");
    if ($sql) {
        echo "Data berhasil disimpan ke database.";
    } else {
    echo "Error: " . mysqli_error($config);
        }
    }
    }
    ?>
    </div>
    </body>
</html>
