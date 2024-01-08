<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Welcome</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
     border-radius: 5px;
     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: relative;
}
h2 {
     text-align: center;
     color: #333;
}
p {
     text-align: center;
}
.button-container {
    text-align: center;
}
.button {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    background-color: yellowgreen;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}
.button:hover {
    background-color: white;
    color: #000;
    border: 1px solid #0056b3;
}
.logout-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: yellowgreen;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}
.logout-button:hover {
    background-color: red;
    color: #fff;
    border: 1px solid #0056b3;
}
</style>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['username'])) { 
    ?>        
    <div class="container">
        <a class="logout-button" href='logout.php'>Logout</a>
        <h2>Hi,</h2>
        <p>Selamat Datang "<?php echo $_SESSION['username']; ?>".</p>
        <p>Berikut ini adalah Menu Data</p>
        <div class="button-container">
            <a class="button" href='user.php'>Halaman User</a>
            <a class="button" href='produk.php'>Halaman Produk</a>
        </div>
    </div>
    <?php 
    } else { ?>
    <div class="container">
        <h2>Maaf...</h2>
        <p>Anda tidak berhak mengakses halaman ini. Silakan 
            <a href="login.php">Login</a> terlebih dahulu.</p>
    </div>
    <?php } ?>
</body>
</html>
