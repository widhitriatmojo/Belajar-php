<?php 
include "config.php";
$user =$_POST['txtUsername'];
$email =$_POST['txtEmail'];
$pass =$_POST['txtPassword'];
$sql ="INSERT INTO user(user_nama,user_email,user_password)
        VALUES ('$user','$email','$pass')";
$hasil = mysqli_query($config,$sql);
if($hasil){
    header("location:login.php");
    exit();
}else{
    echo "Data gagal disimpan ";
}
?>
<br>Kembali ke <a href="login.php">halaman user</a>