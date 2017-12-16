<!DOCTYPE html>
<html>
<head>
	<title>Login | JualBuku</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <?php
  @$pesan = $_GET['pesan'];
  if($pesan=="gagal")
  {
    echo"<script type='text/javascript'>
      alert('Username atau Password Salah');
    </script>";
  }
  else if($pesan=="berhasil")
  {
    echo"<script type='text/javascript'>
      alert('anda berhasil mendaftar, silahkan login');
    </script>";

     }
  else if($pesan=="a")
  {
    echo"<script type='text/javascript'>
      alert('Anda harus melakukan LOGIN terlebih dahulu sebelum melakukan pemesanan');
    </script>";

      }
  ?>
</head>
<body>
    <div class="box">
      <h1 style="color:#000;">LOGIN</h1>
      <form action="ceklogin.php" method="post">
      <input style="background-color:#fff;color:#000;" type="text" placeholder="Username" name="username" required/>
      <input style="background-color:#fff;color:#000;" type="password" placeholder="Password" name="password" pattern=".{10,}"title="Password Kurang dari 10 karakter" required />
      <button style="background-color:#000" type="submit">Login</button>
      </form>
      <b><p style="color:#000;">Belum punya akun?</b>
       <b><span><a style="text-decoration:none; color:blue" href="daftar.php?">Daftar</a></span></p></b>
    </div>
  </div>
</div>
</body>
</html>
