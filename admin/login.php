<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
.login-page {
  width: 360px;
  padding: 6% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 40px;
  text-align: center;
  border-radius: 10px; 
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #9CFF2E;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top: 10px;
}
.form button:hover,.form button:active,.form button:focus {
    background: #38E54D;
  
}
label {
  display: block;
  margin-bottom: 5px;
  text-align: left;  
}
input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 10px;
}
button{
    border-radius: 10px; 
}
</style> 
</head>
<body>
<div class="login-page">
  <div class="form">
    <h2>Login Admin</h2>
    <form action="login_action.php" method="post" class="login-form">
      <div class="form-group" >
        <label for="txtUsername">Username</label>
        <input type="text" id="txtUsername" name="txtUsername" placeholder="Masukkan username" required>
      </div>
      <div class="form-group">
        <label for="txtPassword">Password</label>
        <input type="password" id="txtPassword" name="txtPassword" placeholder="Masukkan password" required>
      </div>
      <button type="submit">Masuk</button>
    </form>
    <p>Belum memiliki akun? <a href="#">Daftar</a></p>
  </div>
</div>

</body>
</html>

