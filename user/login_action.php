<?php
session_start();
include("config.php");
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$sql = "SELECT  user_email FROM user
        WHERE user_nama ='$username'
        AND user_password = '$password'";
$hasil = mysqli_query($config, $sql) or exit ("error query: <b>.$sql.</b>.");
if (mysqli_num_rows($hasil)>0){
    $data = mysqli_fetch_array($hasil);
    $_SESSION['username'] = $data['user_nama'];
    header("location:index.php");
    exit();
}
else { ?>
    <div id="errorPopup" class="popup">
        <h2>Maaf...</h2>
        <p>Username atau password salah. Klik Tutup untuk kembali login.</p>
        <button class="btn btn-primary" onclick="closePopup()">Tutup</button>
    </div><?php
}
?>
</body>
</html>