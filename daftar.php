<!DOCTYPE html>
<html>
<head>
 <title>REGISTER</title>
 <link rel="stylesheet" type="text/css" href="css/login.css">

 </script>
 <?php
 @$pesan = $_GET['pesan'];
 if($pesan=="sama")
 {
   echo"<script type='text/javascript'>
     alert('Username atau password sudah digunakan user lain');
   </script>";
 }
 ?>
</head>
<body>
    <div class="box">
     <h1 style="color:#000;">Daftar</h1>
     <form action="cekdaftar.php" method="post">
     <input style="background-color:#fff;color:#000;" type="text" placeholder="Nama" name="nama" required/>
     <input style="background-color:#fff;color:#000" type="text" placeholder="Username" name="username" required/>
     <input style="background-color:#fff;color:#000" type="password" placeholder="Password" name="password"required/>
       <button style="background-color:#000" type="submit">Daftar</button>
</form>
   </div>
 </div>
</div>
</body>
</html>
