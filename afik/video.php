<!DOCTYPE html>
<?php require('login_chk.php'); ?>
<html>
<head>
	<title>Oneonbd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../static/img/favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" type="text/css" href="../static/css/preloader.css">
	<link rel="stylesheet" type="text/css" href="../static/css/admin.css">
</head>
<body>
	<!-- ============preloader section======== -->
	<div class="per-loader">
		<img class="logo" src="../static/img/preloader.gif">
	</div>
	<script type="text/javascript">
		window.onload = function hidePreLoader(){
			document.querySelector('.per-loader').style = "transform: translateX(100%);";
			updateTable()
		}
	</script>
	<!-- ============preloader section======== -->

	<!-- ============register section======== -->
	<div id="overlay"></div>
	<!-- ============register section======== -->


	<!-- ============navber section======== -->
	<?php require('nav.html'); ?>
	<!-- ============navber section======== -->


	<!-- ============main section======== -->
	<main class="my-5 py-5">
		<div class="container">
			<div class="row mt-5 mb-2">
				<div class="col-lg-12">
					<h3 class="text-white text-center">Manage videos</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form method="post">
						<div class="form-group d-flex">
							<input class="form-control mr-2" type="text" name="notice" placeholder="Write your notice here" required>
							
							<div id="submit" style="display: flex;justify-content: center;align-items: center;">
								<input class="btn btn-outline-white" type="submit" name="add_notice" value="Add"></input>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<!-- ============main section======== -->
	


	<!-- ============show-notice section======== -->
	<section id="showNotice">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white text-center">All the videos</h3>
					</div>
				</div>

				<div class="row mt-3 mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-hover text-center text-white">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Notice title</th>
									<th scope="col">Actions</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============show-notice section======== -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../static/js/stickyNav.js"></script>
	<script type="text/javascript" src="../static/js/video.js"></script>

	<section class="">
	  <!-- Footer -->
	  <footer class="text-white" style="background-color: #111828;">
	    <!-- Grid container -->
	    <div class="container p-4">
	      <!--Grid row-->
	      <div class="row">
	        <!--Grid column-->
	        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
	          <h5 class="">OneonBD</h5>

	          <p>
	            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
	            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
	            aliquam voluptatem veniam, est atque cumque eum delectus sint!
	          </p>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase">Links</h5>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="#!" class="text-white">Link 1</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 2</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 3</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 4</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase mb-0">Links</h5>

	          <ul class="list-unstyled">
	            <li>
	              <a href="#!" class="text-white">Link 1</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 2</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 3</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Link 4</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->
	      </div>
	      <!--Grid row-->
	    </div>
	    <!-- Grid container -->

	    <!-- Copyright -->
	    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	    	&copy;2020 Copyright. All rights are reserved.
	    </div>
	    <!-- Copyright -->
	  </footer>
	  <!-- Footer -->
	</section>
</body>
</html>