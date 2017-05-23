<?php
	require_once('connect.php');
	session_start();
	
	$column = $_POST['column'];
	$selectedColumn = null;
	if($column == "gender"){
		$selectedColumn = 'sex';
	} else if($column=='course'){
		$selectedColumn = 'course';
	} else if($column == 'year_level'){
		$selectedColumn = 'year_level';
	} else if($column == 'college'){
		$selectedColumn = 'college';
	}

	$query = "Select * from tbl_user where type <>'admin'";
	$resp = @mysqli_query($dbc, $query);

	$data = [];

	while($row=mysqli_fetch_array($resp)){
		array_push($data, $row[$selectedColumn]);
	}

	print_r(json_encode($data));
?>