<?php
require('../db_connect.php');

//serving all the data to frontend
if (isset($_POST['cmd']) and $_POST['cmd']=='show_users') {
	if(!$sql=mysqli_query($db,"SELECT * FROM `registerd_users`;")){
		echo json_encode(array('success'=>0,'msg'=>'Database implementation failed. Please try again!'));
	}else{
		$data = [];
		while($fetch=mysqli_fetch_array($sql)){
			array_push($data,$fetch);
		}
		echo json_encode(array('success'=>1,'data'=>$data));
	}
}else{
	echo "Access denied!";
}
?>