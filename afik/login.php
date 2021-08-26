<!DOCTYPE html>
<?php
session_start();

// checking cookie logging
function cookie_token_chk(){
	if (isset($_COOKIE['logged_in_c'])) {
		$cur_date = (int)date('j');
		$cur_mon_year = date('F-Y');

		for ($i=0; $i < 7; $i++) {
			$date_chk = $cur_date - $i;
			if(sha1(md5("{$date_chk}-{$cur_mon_year}")) == $_COOKIE['logged_in_c']){
				return true;
			}
		}
	}
	else{
		return false;
	}
}

//redirecting if already loogged-in
if ((isset($_SESSION['logged_in']) and $_SESSION['logged_in']==sha1(md5(date("j-F-Y")))) or cookie_token_chk()) {
	?>
	<script type="text/javascript">
		window.history.go(-1);
	</script>
	<?php
}

//processing the form
if (isset($_POST['login'])) {
	$usrname = $_POST['usrname'];
	$pwd = $_POST['pwd'];
	$date = sha1(md5(date("j-F-Y")));

	if ($usrname=='afik' and $pwd=='abc123089') {
		if (isset($_POST['login_remember'])) {
			setcookie('logged_in_c',$date,time()+(86400*7),'/');
		}else{
			$_SESSION['logged_in'] = $date;
		}

		header("location:/OneonBD/afik/");
	}else{
		?>
		<script type="text/javascript">
			alert("Wrong credentials!");
		</script>
		<?php
	}
}
?>
<html>
<head>
	<title>Oneonbd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../static/img/favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

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
		}
	</script>
	<!-- ============preloader section======== -->

	<!-- ============register section======== -->
	<div id="overlay"></div>
	<!-- ============register section======== -->


	<!-- ============navber section======== -->
	<nav class="navbar navbar-expand-lg navbar-dark">
	  <div class="container">
	    <a class="navbar-brand" href="/"><img src="../static/img/preloader.gif"></a>
	    </div>
	  </div>
	</nav>
	<!-- ============navber section======== -->


	<!-- ============login section======== -->
	<main class="my-5 py-5">
		<div class="container">
			<div class="row mt-5 mb-2">
				<div class="col-lg-12">
					<h3 class="text-center text-white">Please submit your credentials to log-in</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form class="login-form" method="post">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Username" required maxlength="10" name="usrname" autocomplete="off">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" placeholder="Password" required maxlength="30" minlength="8" name="pwd">
						</div>
						<div class="form-group">
							<input id="remember" type="checkbox" value="remember" name="login_remember">
							<label for="remember" class="text-white" style="cursor: pointer;">Remember me for 7 days</label>
						</div>
						<div class="form-group">
							<input class="btn btn-outline-info" type="submit" name="login" value="Log-in" autocomplete="off">
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<!-- ============login section======== -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../static/js/stickyNav.js"></script>

	<?php include('../footer.html'); ?>
</body>
</html>