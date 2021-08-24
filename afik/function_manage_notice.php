<?php
if (!isset($_POST)) {
	echo "Access denied!";
}else{
	require('../db_connect.php');

	//inserting data to database
	if ($_POST['cmd']=='add') {
		$title = $_POST['title'];
		if(!mysqli_query($db,"INSERT INTO `notice` VALUES(0,'{$title}');")){
			echo json_encode(array('success'=>0,'msg'=>'Database implementation failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully added!'));
		}
	}

	//serving all the data to frontend
	else if($_POST['cmd']=='show_table'){
		if(!$sql=mysqli_query($db,"SELECT * FROM `notice`;")){
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
		$new_title = $_POST['newTitle'];

		if (!mysqli_query($db,"UPDATE `notice` SET `title`='{$new_title}' WHERE `id`= $pk;")) {
			echo json_encode(array('success'=>0,'msg'=>'Database updating failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully updated!'));
		}
	}

	//deleting data from database
	else if($_POST['cmd']=='delete'){
		$pk = $_POST['pk'];

		if (!mysqli_query($db,"DELETE FROM `notice` WHERE `id`= $pk;")) {
			echo json_encode(array('success'=>0,'msg'=>'Database updating failed. Please try again!'));
		}else{
			echo json_encode(array('success'=>1,'msg'=>'Successfully deleted!'));
		}
	}
}
?>