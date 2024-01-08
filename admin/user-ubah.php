<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
    margin-top: 10px;
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
    $nama = $_GET['user_nama'];
    $sql = "SELECT * FROM user WHERE user_nama='$nama'";
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
        <h2> <b>Ubah Data User</b></h2>
<form method="POST" action="user-ubah-action.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="100">Username</td>
            <td>:</td>
            <td>
                <input type="hidden" name="user_nama" value="<?php echo $data['user_nama']?>">
                <input type="text" name="user_nama" size="50" value="<?php echo $data['user_nama']?>">
            </td>
        </tr>
        <tr>
            <td width="100">Password</td>
            <td>:</td>
            <td>
                <input type="hidden" name="user_nama" value="<?php echo $data['user_nama']?>">
                <input type="text" name="user_password" size="50" value="<?php echo $data['user_password']?>">
            </td>
        </tr>
        <tr>
            <td width="100">Harga</td>
            <td>:</td>
            <td>
                <input type="hidden" name="user_email" value="<?php echo $data['user_email']?>">
                <input type="email" name="user_email" size="50" value="<?php echo $data['user_email']?>">
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
