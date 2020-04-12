<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    <style>
    body{
    background-color:bisque;
    background-size: 100%;
    }

    div.box{
    display:inline-block;
    width:250px;
    border: 3px solid indianred;
    margin: 10px;
    margin-left:12px;
    margin-right:1;
    }
    div.box img{
    width:250px;
    height:250px;
    }
    div.box:hover{
    border: 3px solid indianred;
    }
    div.box div.deskripsi{
    padding: 15px;
    text-align:center;
    background-color:indianred; 
    color: snow; 
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
        <a href="register.php" class="btn btn-lg btn-danger">Daftar</a>
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
    <div id="card-content">
	  <div id="card-title">
    <h2>Makanan & Minuman</h2>
	  <div class="underline-title"></div>
    </div>
</center>
<br>
<center>
<div class="box">
        <img src="ayam.jpg">
        <div class="deskripsi">Lalapan Ayam</div>
        </div>
        <div class="box">
        <img src="lele.jpg">
        <div class="deskripsi">Lalapan Lele</div>
        </div> 
        <div class="box">
        <img src="roti.jpg">
        <div class="deskripsi">Roti Bakar</div>
        </div>
        <div class="box">
        <img src="sup.jpg">
        <div class="deskripsi">Soup Iga</div>
        </div>
  </center>
  <br>
  <center>
<div class="box">
        <img src="coklat.jpg">
        <div class="deskripsi">Chocolate late</div>
        </div>
        <div class="box">
        <img src="lemon.jpg">
        <div class="deskripsi">Lemon Tea</div>
        </div> 
        <div class="box">
        <img src="orange.jpg">
        <div class="deskripsi">Orange Juice</div>
        </div>
  </center>
  <br>
<center>
    <div id="card-content">
    <div id="card-title">
    <h2 style="color: black">Kami Menyediakan</h2>
	<div class="underline-title"></div>
    </div>
</center>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3 style="text-align:center">Layanan Ramah</h3>
      <p style="text-align:center">Menyediakan pegawai berkualitas yang tentunya ramah terhadap setiap pelanggan. Melayani setiap pelanggan dengan menerapkan senyum, sopan, santun, santuy. berusaha memenuhi setiap kebutuhan pelanggan dengan sigap</p>
    </div>
    <div class="col-sm-4">
      <h3 style="text-align:center">Harganya Murah</h3>
      <p style="text-align:center">Menyediakan menu berkualitas tentunya halal dan juga bersih. Harga dari setiap menu yang kami sediakan sesuai dengan makanan yang kami jual. Halal, bersih, baik.</p>
    </div>
    <div class="col-sm-4">
      <h3 style="text-align:center">Vasilitas Lengkap</h3>
      <p style="text-align:center">Menyediakan berbagai vasilitas sesuai kebutuhan pelanggan. Vasilitas yang tentunya aman dan ramah lingkungan serta bersih dan layak pakai. Karena bagi kami kebutuhan pelanggan adalah yang utama</p>
    </div>
  </div>
</div>
<br>
<br>
<br>
<center>
    <div id="card-content">
	  <div id="card-title">
    <h2>Macam Paket</h2>
	  <div class="underline-title"></div>
    </div>
</center>
<br>
<br>
<section id="visi">
      <div class="container text-center">
        <div class="row text-center">
          
          <div class="col-md-4 vm">
          <div class="card" style="width: 350px">
          <div class="card-header">Paket Dinner Keluarga</div>
          <div class="card-body">
          <h2 class="card-tittle">Rp. 250.000</h2>
            <p class="card-r">Layanan :</p>
            <p class="card-p">Makanan     : Satu paket lalapan ayam potong</p>
            <p class="card-p">Minuman     : Orange Juice / lemon tea</p>
            <p class="card-p">Kapasitas   : 4 Orang</p>
            <a href="pesan.php" class="btn btn-lg btn-success">Pesan</a>
          </div>
          </div>
          </div>
          <div class="col-md-4 vm">
          <div class="card" style="width: 350px">
          <div class="card-header">Pesta Keluarga</div>
          <div class="card-body">
          <h2 class="card-tittle">Rp. 400.000</h2>
            <p class="card-r">Layanan :</p>
            <p class="card-p">Makanan     : Paket lalapan ayam dan lele</p>
            <p class="card-p">Minuman : Chocolate late + lemon tea</p>
            <p class="card-p">Kapasitas   : 5 Orang</p>
            <a href="pesan.php" class="btn btn-lg btn-success">Pesan</a>
          </div>
          </div>
          </div>
          <div class="col-md-4 vm">
          <div class="card" style="width: 350px">
          <div class="card-header">Makan Siang</div>
          <div class="card-body">
          <h2 class="card-tittle">Rp. 300.000</h2>
            <p class="card-r">Layanan :</p>
            <p class="card-p">Makanan     : Roti bakar dan soup iga</p>
            <p class="card-p">Minuman     : Chocolate late + lemon tea</p>
            <p class="card-p">Kapasitas   : 2 Orang</p>
            <a href="pesan.php" class="btn btn-lg btn-success">Pesan</a>
          </div>
          </div>
          </div>
          </div>
          </div>
          <br>
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