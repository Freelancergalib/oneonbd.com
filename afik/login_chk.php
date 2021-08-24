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
	
}else{
	header("location:/OneonBD/afik/login.php");
}
?>