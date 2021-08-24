<?php
if (!isset($_POST)) {
	echo "Access denied!";
}else{
	require('../db_connect.php');

	//inserting data to database
	if ($_POST['cmd']=='add') {
		$url = $_POST['videoUrl'];
		if(!mysqli_query($db,"INSERT INTO `videos` VALUES(0,'{$url}');")){
			echo json_encode(array('success'=>0,'msg'=>'Database implementation failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully added!'));
		}
	}

	//serving all the data to frontend
	else if($_POST['cmd']=='show_table'){
		if(!$sql=mysqli_query($db,"SELECT * FROM `videos`;")){
			echo json_encode(array('success'=>0,'msg'=>'Database implementation failed. Please try again!'));
		}else{
			$data = [];
			while($fetch=mysqli_fetch_array($sql)){
				array_push($data,$fetch);
			}
			echo json_encode(array('success'=>1,'data'=>$data));
		}
	}

	//updating data in database
	else if($_POST['cmd']=='update'){
		$pk = $_POST['pk'];
		$new_url = $_POST['newUrl'];

		if (!mysqli_query($db,"UPDATE `videos` SET `url`='{$new_url}' WHERE `id`= $pk;")) {
			echo json_encode(array('success'=>0,'msg'=>'Database updating failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully updated!'));
		}
	}

	//deleting data from database
	else if($_POST['cmd']=='delete'){
		$pk = $_POST['pk'];

		if (!mysqli_query($db,"DELETE FROM `videos` WHERE `id`= $pk;")) {
			echo json_encode(array('success'=>0,'msg'=>'Database updating failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully deleted!'));
		}
	}
}
?>