<?php
	error_reporting(0);
  session_start();
  include('../global-validation/config.php');
  $query = "SELECT * FROM scrim_info";
  $alert = "SELECT * FROM alerts_info";
  $results = mysqli_query($connect, $query);
  $result_alert = mysqli_query($connect,$alert);
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eternity Esports | Info</title>
  <meta name="title" content="Eternity Esports | Events">
  <meta name="description" content="Welcome to Eternity Esports Official Website. We have a consisten to conduct a fair and exciting scrim events every month. Check Out it Now!">
  <link rel="short icon" href="../assets//img/etr-img-1.jpeg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"/>
  <link rel="stylesheet" href="../assets//vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets//css/style.css"/>
  <link rel="stylesheet" href="../assets//css/button.css"/>
</head>

<body oncontextmenu = "return false">
  <footer class="footer text-faded text-center py-3 fixed-top">
    <div class="container">
      <p class="m-0 large" align="left">Eternity Esports</p>
	  <p class="m-0 large" align="right">Bahasa <i class="fa fa-globe" aria-hidden="true"></i> : <a href="../en-us/event.php">EN</a> | <a href="../id/event.php">ID</a></p>
    </div>
  </footer>
  <br><br><br><br>
  
  <?php foreach ($result_alert as $row) {
	  echo'
	  <div class="alert alert-'.$row['type'].'">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		'.$row['description'].'
		<a href="'.$row['link'].'">Click here <i class="fa fa-external-link"></i></a>
	  </div>';
    }
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Beranda</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="event.php">Info</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.php">Galeri</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact-us.php">Hubungi Kami</a>
          </li>
          <?php include('../global-validation/transform-menu-id.php'); ?>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
    <?php 
      $type = 'public';
      $sql = "SELECT * FROM scrim_info WHERE type='$type'";
      $query = mysqli_query($connect, $sql);
      while($d = mysqli_fetch_array($query)){
        echo'
        <div class="intro-text left-0 bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
          <span class="section-heading-upper">'.$d['header'].'</span>
          </h2>
          <p>
          Dipublikasikan Oleh : <font color="red">'.$d['posted_by'].'</font><br>
          Dipublikasikan Pada : <font color="red"><i class="fa fa-calendar" aria-hidden="true"></i> '.$d['date'].'</font><br>
          Deskripsi &nbsp; :<br>
          '.$d['description'].'
          </p>
        </div><br>';
      }; 
    ?>
    </div>
  </section>

  <footer class="footer text-faded text-center py-3 fixed-bottom">
    <div class="container">
      <p class="m-0 small">Hak Cipta &copy; 2020 Eternity Esports | Dirancang oleh <a href="https://instagram.com/stanley_owenn/">Stanley Owen</a></p>
    </div>
  </footer>
  
  <div class="button" title="Contact Us">
    <a href="https://wa.me/message/SGOS5RUB46CUA1" class="hvr-float-shadow">
  	  <img src="../assets//img/whatsapp-logo.png" width="60">
    </a>
  </div>
  <div class="button1" title="Follow Us On">
    <a href="https://instagram.com/eternity_esports.id" class="hvr-float-shadow1">
	  <img src="../assets//img/instagram-logo.webp" width="60">
    </a>
  </div>
  <div class="button2" title="Mail Us">
    <a href="mailto:theeternity.esports.id@gmail.com" class="hvr-float-shadow2">
	  <img src="../assets//img/gmail-logo.png" width="60">
    </a>
  </div>
  
    <script src="../assets//vendor/jquery/jquery.min.js"></script>
    <script src="../assets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
