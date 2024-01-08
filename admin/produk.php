<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
  </head>
  <body>
    <style>
       body {
            padding: 20px;
        }
     .navbar {
            background-color: yellowgreen;
            height: 12vh;
            line-height: 45px;
            color: white;
        }
        .navbar-brand {
            color: #ffffff;
            margin-left: 20px;
        }
.btn{
  background-color: yellowgreen;
  color: #ffffff;
}
.btn-hover{
  background-color: white;
  color: yellowgreen;
}
.logout-button {
            background-color: yellowgreen;
            color: white;
            border-color: white;
        }
        .logout-button:hover {
            background-color: red;
            border-color: red;
            color: #fff;
        }
</style>
<div class="card" >
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="#">Produk kripik pisang</a>
            <a class="btn logout-button" 
            href="logout.php" 
            style="margin-right: 30px;">Logout</a>   
        </div>        
    </nav> 
    <br> 
<section id="hero">
  <div class="container  ">
    <div class="row h-100 "> 
    <div class =""> 
      <h1>KRIPIKKU</h1>
      <br>
      <a href="tambah-produk.php"  class="btn ">Tambah Produk</a>
      <br>
      <div class="card" style="margin-top: 10px;">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Varian</th>
            <th scope="col">Harga</th>
             <th scope="col">Edit / Hapus</th>
          </tr>
      </thead>
        <tbody>
            <?php 
                include ('config.php');
                $sql=mysqli_query($config, "select * from produk order by ID_PRODUK ASC");
                $no=1;
                    while ($row=mysqli_fetch_array($sql)){
                      $nama=$row['NAMA_PRODUK'];
                        echo "
                           <tr>
                            <td width='30'>".$no."</td>
                            <td width='100'><image width='60px' src='img/".$row['GAMBAR']."'></td>
                            <td width='200'>".$row['NAMA_PRODUK']."</td>
                            <td width='150'>".$row['VARIAN']."</td>
                            <td width='100'>".$row['HARGA']."</td>
                            <td width='100'><a class='btn ' 
                            href='ubah-produk.php?ID_PRODUK=".$row['ID_PRODUK']."'>Edit</a> 
                            <a class='btn logout-button' 
                            href='produk-hapus.php?ID_PRODUK=".$row['ID_PRODUK']."'>Hapus</a> </td>
                          </tr>
                                        ";
                  $no++;
                };
            ?>
            </tbody>
      </table>
    </div>
    
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; Kripik pisang 2023</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"></script>
  </body>
</html>
