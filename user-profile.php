<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<?php
include 'header.php'
?>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
<div class="container">
<div class="row">
	<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
	<div class="sidebar">
					<!-- User Widget -->
	<div class="widget user">
						<!-- User Image -->

		<?php
include 'connection.php';
$Id=$_SESSION['id'];
$q = mysqli_query($conn,"SELECT * from reg where Id='$Id'");
$row = mysqli_fetch_array($q);

		?>
			<div class="image d-flex justify-content-center">
	<?php echo '<img src="images/'.$row['image'].'">'?>
		</div>
						<!-- User Name -->
		<h6 class="text-center" ><?php echo $row['fname'].' '.$row['lname']  ?></h5>
	<h6 class="text-center" ><?php echo $row['username'] ?></h5>
	<h6 class="text-center" ><?php echo $row['Email'] ?></h5>
		</div>
					<!-- Dashboard Links -->
					
		</div>
	</div>
	<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
	<div class="widget welcome-message">
		<h2>Edit profile</h2>
		
		</div>
				<!-- Edit Personal Info -->
		<div class="row">
			<div class="col-lg-6 col-md-6">
			<div class="widget personal-info">
		<h3 class="widget-header user">Edit Personal Information</h3>
		<form action="#">
		<!-- First Name -->
<div class="form-group">
	<label for="first-name">First Name</label>
	<input type="text" class="form-control" id="first-name">
</div>
		<!-- Last Name -->
<div class="form-group">
	<label for="last-name">Last Name</label>
	<input type="text" class="form-control" id="last-name">
		</div>
		

	<!-- Comunity Name -->
<div class="form-group">
	<label for="comunity-name">Comunity Name</label>
	<input type="text" class="form-control" id="comunity-name">
</div>
	
								<!-- Zip Code -->
<div class="form-group">
									<label for="zip-code">Zip Code</label>
									<input type="text" class="form-control" id="zip-code">
</div>
								<!-- Submit button -->
<button class="btn btn-transparent">Save My Changes</button>
							</form>
						</div>
					</di
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<?php

include 'footer.php';
?>
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>