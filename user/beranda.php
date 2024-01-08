<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" 
     rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <style>      
body {
    font-family: 'Poppins', sans-serif; 
}
.navbar{
    background-color: #ffffff;
    height: 12vh;
  line-height: 45px;
  z-index: 1;
}
.container{
  justify-content: space-between;
}
.navbar-brand{
    font-size: 20px;
    font-weight: 700;
}
.nav-link {
    font-size: 16px;
    color: white;
}
.nav-link button{
  background-color: yellowgreen;
  color: white;
  padding: 2px;
  border: none;
  width: 60px;
  border-radius: 7px;
}
.nav-link.active{
    font-weight: 700;
}
.button-secondary{
    width: 133px;
    height: 40px;
    background-color: white;
    color: yellowgreen;
    border: none;
    font-size: 16px;
    font-weight: 700;
}
.button-primary{
    width: 133px;
    height: 40px;
    background-color: transparent;
    color: white;
    border: none;
    font-size: 16px;
    font-weight: 400;
}
.hero-tagline h1{
    color: #000000;
    font-size: 40px;
    font-weight: 700;
    line-height: 45PX;
    width: 90%;
}
.hero-tagline p{
    color: #000000;
    font-size: 16px;
    line-height: 25px;
    width: 75%;
    margin-bottom: 50px;
    margin-top: 20px;
}
.button-lg-primary{
    width: 200px;
    height: 60px;
    background-color:yellowgreen ;
    color: #ffffff;
    border: none;
    font-size: 16px;
    font-weight: 700;
}
.collapse{
  left: 20%;
}
.btn{
  position: relative;
  right: 15%;
}
#hero{
  
    height: 100vh;  
}
#hero img {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 330px;
}
footer{
  background: yellowgreen;
}
</style>
    <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
      <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="#"  >
          Kripikku
        </a>
        <div class="collapse navbar-collapse position-relative" id="navbarNav" >
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#" style="margin-top: 5px">Beranda</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#" style="margin-top: 5px">Pemesanan</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#" style="margin-top: 5px">Keranjang</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#" style="margin-top: 5px">Tentang</a>
              </li>
          </ul>
          <div class="btn nav-item mx-2">
            <a class="nav-link" href="register.php" style="margin-top: 5px"><button>Login</button></a>
          </div>
        </div>
      </div>
      </div>
    </nav>

    <section id="hero">
  <div class="container h-100">
    <div class="row h-100 "> 
      <div class="col-md-6 hero-tagline my-auto">
        <h1>Selamat Datang Didunia Kelezatan Kripikku</h1>
        <p><span class="fw-bold">Kripikku</span> 
        ini Hadir untuk memanjakan lidah dan perut kalian, yang memiliki berbagai macam varian rasa.</p>
        <button class="button-lg-primary" style="border-radius: 5px;" 
        onclick="location.href='register.php'">Pesan Sekarang</button>
      </div>
    </div>
    <img src="piku.png" alt="" class="position-absolute end-0 bottom-0" 
    style="margin-right: 300px; margin-bottom: 80px; width: 330px; z-index: 0; ">
  </div>
</section>

<footer class="footer text-white p-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Tentang Kami</h4>
        <p>Kripikku adalah toko online yang 
          menyediakan berbagai macam varian kripik 
          dengan cita rasa terbaik.</p>
      </div>
      <div class="col-md-4">
        <h4>Kontak Kami</h4>
        <ul>
          <li>Alamat: Jalan Contoh No. 123</li>
          <li>Email: info@kripikku.com</li>
          <li>Telepon: (123) 456-7890</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Ikuti Kami</h4>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-4">
      &copy; 2023 Kripikku - All rights reserved.
    </div>
  </div>
</footer>
  </body>
</html>