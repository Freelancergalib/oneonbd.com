<!DOCTYPE html>
<html>
<head>
	<title>Oneonbd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="static/img/favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" type="text/css" href="static/css/index.css">
	<link rel="stylesheet" type="text/css" href="static/css/preloader.css">
</head>
<body>
	<!-- ============preloader section======== -->
	<div class="per-loader">
		<img class="logo" src="static/img/preloader.gif">
	</div>
	<script type="text/javascript">
		window.onload = function hidePreLoader(){
			document.querySelector('.per-loader').style = "transform: translateX(100%);";
		}
	</script>
	<!-- ============preloader section======== -->

	<!-- ============register section======== -->
	<?php if(!isset($_COOKIE['rg94Kr'])): ?>
	<div id="overlay"></div>
	<div id="register">
		<span id="close" onclick="hideRegistration()">X</span>
		<img class="form-logo" src="static/img/preloader.gif">

		<p class="lead my-3 text-center">Please fill-up the form to be registered</p>

		<form method="post">
			<div class="form-group">
				<input class="form-control" type="text" name="full_name" placeholder="Full name" required maxlength="30">
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="mail" placeholder="Email address" required>
			</div>
			<div class="form-group">
				<input class="form-control" type="tel" name="phn" placeholder="Phone number" required maxlength="11" minlength="11">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="pass" placeholder="Password" required maxlength="30" minlength="8">
			</div>
			
			<center>
				<button class="btn btn-outline-success" type="submit" name="register">
					<span>Register</span>
					<img class="ajax-loader" src="static/img/ajax.gif">
				</button>
			</center>
		</form>
	</div>
	<?php endif; ?>
	<!-- ============register section======== -->


	<!-- ============navber section======== -->
	<nav class="navbar navbar-expand-lg navbar-dark">
	  <div class="container">
	    <a class="navbar-brand" href="/OneonBD/"><img src="static/img/preloader.gif"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ml-lg-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#service">Service</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#team">Our-team</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Contact</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Shop</a>
	        </li>
	        <?php if(!isset($_COOKIE['rg94Kr'])): ?>
	        <li id="registerClick" class="ml-lg-2">
	          <button class="btn-sm btn-outline-white" onclick="showRegistration()">
	          		<i class="fas fa-user"></i> Signup
	          	</button>
	        </li>
	       <?php endif; ?>
	      </ul>
	    </div>
	  </div>
	</nav>
	<script type="text/javascript">
    	document.querySelectorAll('nav .nav-link').forEach((e)=>{
    		e.onclick = ()=>{
    			document.querySelector('.navbar-toggler').click();
    		}
    	})
    </script>
	<!-- ============navber section======== -->
	

	<!-- ============main section======== -->
	<main>
		<div class="inner-section">
			<div class="row">
				<div class="col-lg-12 pr-0">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100 carousel-img" src="static/img/abc.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
								    <h5>First</h5>
								    <p>first</p>
								</div>
							</div>

							<div class="carousel-item">
								<img class="d-block w-100 carousel-img" src="static/img/abc.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
								    <h5>Second</h5>
								    <p>second</p>
								</div>
							</div>

							<div class="carousel-item">
								<img class="d-block w-100 carousel-img" src="static/img/abc.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
								    <h5>Third</h5>
								    <p>third</p>
								</div>
							</div>
						</div>

						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>

							<span class="sr-only">Previous</span>
						</a>

						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>

							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- ============main section======== -->


	<!-- ============live-notice section======== -->
	<section class="my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="live-notice bg-white">
						<span class="bg-info p-2 text-center text-white" style="font-weight: 700;">Update</span>
						<marquee style='width: 90%;' class='p-2'>
							<?php
							require("db_connect.php");
							if($sql=mysqli_query($db,"SELECT * FROM `notice`;")):
								while($fetch=mysqli_fetch_array($sql)):
							?>
							<img class="title-breaker" src="static/img/favicon.ico">
							<a class="news" href=""><?php echo $fetch['title']; ?></a>
							<?php endwhile; ?>
							<?php endif; ?>
						</marquee>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============live-notice section======== -->
	

	<!-- ============service section======== -->
	<section class="my-5" id="service">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white section-heading">Our services</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="wrapper">
						    <div class="table basic">
						      <div class="price-section">
						        <div class="price-area">
						          <div class="inner-area">
						            <span class="text">$</span>
						            <span class="price">29</span>
						          </div>
						        </div>
						      </div>
						      <div class="package-name"></div>
						      <ul class="features">
						        <li>
						          <span class="list-name">One Selected Template</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">100% Responsive Design</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Credit Remove Permission</span>
						          <span class="icon cross"><i class="fas fa-times"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Lifetime Template Updates</span>
						          <span class="icon cross"><i class="fas fa-times"></i></span>
						        </li>
						      </ul>
						      <div class="btn"><button>Purchase</button></div>
						    </div>
						    <div class="table premium">
						      <div class="price-section">
						        <div class="price-area">
						          <div class="inner-area">
						            <span class="text">$</span>
						            <span class="price">59</span>
						          </div>
						        </div>
						      </div>
						      <div class="package-name"></div>
						      <ul class="features">
						        <li>
						          <span class="list-name">Five Existing Templates</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">100% Responsive Design</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Credit Remove Permission</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Lifetime Template Updates</span>
						          <span class="icon cross"><i class="fas fa-times"></i></span>
						        </li>
						      </ul>
						      <div class="btn"><button>Purchase</button></div>
						    </div>
						    <div class="table ultimate">
						      <div class="price-section">
						        <div class="price-area">
						          <div class="inner-area">
						            <span class="text">$</span>
						            <span class="price">99</span>
						          </div>
						        </div>
						      </div>
						      <div class="package-name"></div>
						      <ul class="features">
						        <li>
						          <span class="list-name">All Existing Templates</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">100% Responsive Design</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Credit Remove Permission</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						        <li>
						          <span class="list-name">Lifetime Template Updates</span>
						          <span class="icon check"><i class="fas fa-check"></i></span>
						        </li>
						      </ul>
						      <div class="btn"><button>Purchase</button></div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============service section======== -->
	

	<!-- ============notice section======== -->
	<section id="notice" class="my-5">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white section-heading">Notice-board</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="notice text-white">
							<ul>
								<?php
								if($sql=mysqli_query($db,"SELECT * FROM `notice`;")):
									while($fetch=mysqli_fetch_array($sql)):
								?>
								<li><?php echo $fetch['title']; ?></li>
								<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============notice section======== -->
	


	<!-- ============team section======== -->
	<section id="team" class="my-5">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white section-heading">Our team</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center align-items-center flex-wrap">
						<div class="card">
				            <div class="content">
				                <div class="imgBx">
				                    <img src="static/img/profile.webp" alt="">
				                </div>
				                <div class="contentBx">
				                    <h4>Afik</h4>
				                    <h5>CEO</h5>
				                </div>
				                <div class="sci">
				                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="card">
				            <div class="content">
				                <div class="imgBx">
				                    <img src="static/img/profile.webp" alt="">
				                </div>
				                <div class="contentBx">
				                    <h4>Shuvo</h4>
				                    <h5>Developer</h5>
				                </div>
				                <div class="sci">
				                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				                </div>
				            </div>
				        </div>

				        <div class="card">
				            <div class="content">
				                <div class="imgBx">
				                    <img src="static/img/profile.webp" alt="">
				                </div>
				                <div class="contentBx">
				                    <h4>Galib</h4>
				                    <h5>Developer</h5>
				                </div>
				                <div class="sci">
				                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============team section======== -->
	

	<!-- ============youtube section======== -->
	<section id="youtube" class="my-5">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white section-heading">Our recent videoes</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="videoes d-flex justify-content-center flex-wrap">
							<?php
							if($sql=mysqli_query($db,"SELECT * FROM `videos`;")):
								while($fetch=mysqli_fetch_array($sql)):
							?>
							<iframe width="640" height="390" src="https://www.youtube.com/embed/<?php echo $fetch['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============youtube section======== -->
	

	<!-- ============sponsor section======== -->
	<section id="sponsor" class="my-5">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white section-heading">Our sponsorship</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class='bg-white p-3 d-flex align-items-center justify-content-center flex-wrap'>
							<img src="static/sponser/bank-asia.svg">
							<img src="static/sponser/rocket.svg">
							<img src="static/sponser/bkash.svg">
							<img src="static/sponser/mastercard.png">
							<img src="static/sponser/nagad.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============sponsor section======== -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript" src="static/js/stickyNav.js"></script>
	<script type="text/javascript" src="static/js/OwlCarousel.js"></script>
	<?php if(!isset($_COOKIE['rg94Kr'])): ?>
	<script type="text/javascript" src="static/js/register.js"></script>
	<?php endif; ?>


	<?php include('footer.html'); ?>
</body>
</html>