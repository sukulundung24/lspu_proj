<?php
	
	require_once('connect.php');
	session_start();

	$category = $_POST['category'];

	$column = null;
	if($category=='gender'){
		$column = 'sex';
	}else if($category=='all'){
		$column='type';
	} else if($category=='course'){
		$column='course';
	} else {
		$column='year_level';
	}
	$checkQuery = "Select * from tbl_user where type <> 'admin' and status='study-work' ";
	$resp = @mysqli_query($dbc, $checkQuery);
	$data = [];
	while($checkRow=mysqli_fetch_array($resp)){

		array_push($data,$checkRow[$column]);
		
	}

	print_r(json_encode($data));

?>