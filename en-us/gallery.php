<?php
	error_reporting(0);
	session_start();
	include('../global-validation/config.php');
	$alert = "SELECT * FROM alerts_info";
	$result_alert = mysqli_query($connect,$alert);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eternity Esports | Gallery</title>
  <meta name="title" content="Eternity Esports | Gallery">
  <meta name="description" content="Welcome to Eternity Esports Official Website. Here are all of our certificates and appreciation made by our members.">
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
	  <p class="m-0 large" align="right">Languages <i class="fa fa-globe" aria-hidden="true"></i> : <a href="../en-us/gallery.php">EN</a> | <a href="../id/gallery.php">ID</a></p>
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
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Menus</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="event.php">Event</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.php">Gallery
				      <span class="sr-only">(current)</span>
			      </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact-us.php">Contact Us</a>
          </li>
		      <?php include('../global-validation/transform-menu.php'); ?>
        </ul>
      </div>
    </div>
  </nav>
  
  <?php
	$query = $connect->query("SELECT * FROM gallery ORDER BY uploaded_on DESC");
	if($query->num_rows > 0){
		while($row = $query->fetch_assoc()){
			$imageURL = './../assets//img/'.$row["file_name"];
  ?>
  
  <section class="page-section cta">
    <div class="container">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
			<img src="<?php echo $imageURL; ?>" class="container">
		  </div>
		</div>
	</div>
  </section>
  
  <?php }
	}else{ ?>
  <?php } ?>
  
  <footer class="footer text-faded text-center py-3 fixed-bottom">
    <div class="container">
      <p class="m-0 small">Copyright &copy; 2020 Eternity Esports | Designed by <a href="https://instagram.com/stanley_owenn/">Stanley Owen</a></p>
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
