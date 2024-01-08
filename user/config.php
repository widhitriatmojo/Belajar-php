<?php 
$config =mysqli_connect("localhost","root","","datawebuts");
if (!$config){
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>