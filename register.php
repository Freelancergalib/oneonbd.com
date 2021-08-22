<?php 
require('db_connect.php');

if(!isset($_POST['full_name']) and !isset($_POST['mail']) and !isset($_POST['phn']) and !isset($_POST['pass'])){
	echo json_encode(array('success'=>0, 'msg'=> "Form processing failed. Please try again!"));
}else{
	$date = getdate();
	$date = "{$date['year']}-{$date['mon']}-{$date['mday']}";

	$full_name = $_POST['full_name'];
	$mail = $_POST['mail'];
	$phn = $_POST['phn'];
	$pwd = sha1(md5($_POST['pass']));

	$query = "INSERT into `registerd_users` VALUES(0,'{$full_name}','{$mail}','{$phn}','{$pwd}','{$date}');";

	if(!mysqli_query($db,$query)){
		echo json_encode(array('success'=>0, 'msg'=> "Database implementation failed. Please try again!"));
	}else{
		setcookie('rg94Kr',true, time()+(86400*100), '/');
		echo json_encode(array('success'=>1, 'msg'=> "Registered successfully!"));
	}
}
?>