<?php
$hostname="localhost";
$username="root";
$password="";
$database="datawebuts";
$config= mysqli_connect($hostname,$username,$password) or die ("koneksi ke MYSQL gagal");
mysqli_select_db($config, $database) or die ("koneksi ke database gagal");
?>