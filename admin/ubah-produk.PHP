<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
.navbar {
    background-color: yellowgreen;
    height: 12vh;
    line-height: 45px;
    color: white;
}
.navbar-brand {
    color: #ffffff;
    margin-left: 20px;
    font-size: 24px;
}
.btn {
    background-color: yellowgreen;
    color: #ffffff;
    margin-bottom: 20px;
    margin-top:10px;
}
body {
    padding: 20px;
}
h2 {
    margin-top: 20px;
    font-size: 24px;
    margin-bottom: 20px;
}
table {
    width: 100%;
    max-width: 500px;
}
table td {
    padding: 5px;
}
    </style>
</head>
<body>
<?php 
    include 'config.php';
    $ID = $_GET['ID_PRODUK'];
    $sql = "SELECT * FROM produk WHERE ID_PRODUK=$ID";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
?>
<center>
<div class="card" style="width: 35rem;" >
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container d-flex ">
        <a class="navbar-brand" href="#"><b>Produk kripik pisang</b></a>
    </div>
</nav>
<section id="hero">
  <div class="container  ">
    <div class="row h-100 "> 
      <div class=" ">
        <h2> <b>Ubah Data Produk</b></h2>
<form method="POST" action="produk-ubah_action.php" enctype="multipart/form-data">
<table>
    <tr>
        <td width="100">Produk</td>
        <td>:</td>
        <td>
            <input type="hidden" name="ID_PRODUK" value="<?php echo $data['ID_PRODUK']?>">
            <input type="text" name="NAMA_PRODUK" size="50" value="<?php echo $data['NAMA_PRODUK']?>">
        </td>
    </tr>
    <tr>
        <td width="100">Varian</td>
        <td>:</td>
        <td>
            <input type="hidden" name="ID_PRODUK" value="<?php echo $data['ID_PRODUK']?>">
            <input type="text" name="VARIAN" size="50" value="<?php echo $data['VARIAN']?>">
        </td>
    </tr>
    <tr>
        <td width="100">Harga</td>
        <td>:</td>
        <td>
            <input type="hidden" name="HARGA" value="<?php echo $data['HARGA']?>">
            <input type="text" name="HARGA" size="50" value="<?php echo $data['HARGA']?>">
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" class="btn" name="simpan" value="Simpan">
            <input type="reset" value="Reset" class="btn">
        </td>
    </tr>
</table>
</form>
</div>
</center>
</body>
</html>
