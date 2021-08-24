<?php
session_start();

if (isset($_SESSION['logged_in'])) {
	session_unset();
	session_destroy();
	header("location:/OneonBD/afik/login.php");
}
else if (isset($_COOKIE['logged_in_c'])) {
	setcookie('logged_in_c','',time()+(86400-7),'/');
	header("location:/OneonBD/afik/login.php");
}else{
	?>
	<script type="text/javascript">
		window.history.go(-1);
	</script>
	<?php
}
?>