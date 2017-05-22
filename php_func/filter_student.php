<?php
	
	require_once('connect.php');
	session_start();

	$data = $_POST['data'];
	$category = $_POST['category'];

	$column = null;
	if($category=='gender'){
		$column = 'sex';
	}else if($category=='year_level'){
		$column='year_level';
	} else if($category=='course'){
		$column='course';
	} else {
		$column = 'all';
	}

	if($column!='all'){
		$printData = [];

		for($i=0; $i<count($data); $i++){
			$checkQuery = "Select count(*) from tbl_user INNER JOIN student_survey_status ON tbl_user.id_num = student_survey_status.id_num where tbl_user.type <> 'admin' and tbl_user.status='study-work' and tbl_user.".$column." = '".$data[$i]."' and student_survey_status.status = 'finish' ";
			$resp = @mysqli_query($dbc, $checkQuery);
			$checkRow=mysqli_fetch_array($resp);
			
			array_push($printData,$checkRow[0]);
		}
		
		print_r(json_encode($printData));
	}
	
	// $resp = @mysqli_query($dbc, $checkQuery);
	// $data = [];
	// while($checkRow=mysqli_fetch_array($resp)){

	// 	array_push($data,$checkRow[$column]);
		
	// }

	// print_r(json_encode($data));

?>