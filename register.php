<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    <style>
    body{
    background-color:bisque;
    background-size: 100%;
    }
    .underline-title {
      background: maroon;
      height: 4px;
      margin: 1.1rem auto 0 auto;
      width: 500px;
  }
  .card-header{
      background: maroon;
      letter-spacing: 3px;
      padding-bottom: 20px;
      padding-top: 13px;
      text-align: center;
      color:snow;
  }
  .card-r{
      letter-spacing: 3px;
      padding-bottom: 5px;
      padding-top: 10px;
      text-align: left;
      font-weight: bold;
      color: maroon;
    }
    .card-p{
      text-align: left;
    }
  </style>
</head>
<body>
<marquee style="color: white; background-color:indianred"width="1500" height="30">Kepuasan Pelanggan Adalah Tujuan Utama Kami @mama_suka Ingin pesan? hubungi +6282233144153</marquee>
    <div class="jumbotron" style="text-align: center; background-color:maroon;">
        <h1 style="color:white; font-size: 70px; font-family:Arial, Helvetica, sans-serif">Selamat Datang</h1>
        <p style="color:snow; font-size:30px">Restoran Mama Suka</p> 
        <a href="login.php" class="btn btn-lg btn-primary">Masuk</a>
        <a href="home.php" class="btn btn-lg btn-danger">Kembali</a>
      </div>
      <nav class="navbar navbar-expand-sm" style="background-color:indianred">
        <a class="navbar-brand" style="color:snow; font-size: 25px" href="home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color:snow; font-size:17px" href="restoran.php">Restaurant</a>
            </li>   
          </ul>
        </div>  
      </nav>
      <br>
      <center>
    <form action="post-register.php" method="POST">
    <div id="card-content">
	  <div id="card-title">
    <h2>Daftar</h2>
	  <div class="underline-title"></div>
    </div>
    <br>
    <table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Daftar"></td>
			</tr>
		</table>
        </forn>
        </center>
        <div class="jumbotron text-center" style="margin-bottom:0; background-color: indianred; color:snow">
          <h1>Contact Information</h1>
          <p>Restoran Mama Suka</p>
          <p>Jl. Raya Pekulo, Srono Banyuwangi</p>
          <p>34845, Banyuwangi - Jawa Timur</p>
          <p>Telp: +6282233144153</p>
          <p>Email:info@mama_suka.com</p>
          </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
</body>
</html>