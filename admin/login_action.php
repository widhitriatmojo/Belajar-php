<?php
session_start();
include("config.php");
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$sql = "SELECT  nama_admin FROM admin
        WHERE email_admin ='$username'
        AND password_admin = '$password'";
$hasil = mysqli_query($config, $sql) or exit ("error query: <b>.$sql.</b>.");
if (mysqli_num_rows($hasil)>0){
    $data = mysqli_fetch_array($hasil);
    $_SESSION['username'] = $data['nama_admin'];
    header("location:welcome.php");
    exit();
}
else {
    ?>
    <div id="errorPopup" class="popup">
        <h2>Maaf...</h2>
        <p>Username atau password salah. Klik Tutup untuk kembali login.</p>
        <button class="btn btn-primary" onclick="closePopup()">Tutup</button>
    </div>
    <script>
        function showPopup() {
            var popup = document.getElementById("errorPopup");
            popup.style.display = "block";
        }
        function closePopup() {
            var popup = document.getElementById("errorPopup");
            popup.style.display = "none";
            window.location.href = "login.php"; 
        }
        window.onload = showPopup;
    </script><?php
}
?>