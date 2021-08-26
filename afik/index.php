<!DOCTYPE html>
<?php require('login_chk.php'); ?>
<html>
<head>
	<title>Oneonbd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../static/img/favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
			updateTable();
		}
	</script>
	<!-- ============preloader section======== -->

	<!-- ============register section======== -->
	<div id="overlay"></div>
	<!-- ============register section======== -->


	<!-- ============navber section======== -->
	<?php require('nav.html'); ?>
	<!-- ============navber section======== -->


	<!-- ============show registered-users section======== -->
	<section id="showUsers" class="mt-5 pt-5">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="text-white text-center">All the users</h3>
					</div>
				</div>

				<div class="row mt-3 mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-hover text-center text-white">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">E-mail</th>
									<th scope="col">Phone no</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============show registered-users section======== -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../static/js/stickyNav.js"></script>
	<script type="text/javascript" src="../static/js/users.js"></script>

	<?php include('../footer.html'); ?>
</body>
</html>