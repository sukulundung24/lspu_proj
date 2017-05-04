<?php
	require_once('connect.php');
	session_start();
	
	$type = $_POST['type'];
	$question = $_POST['question'];

	
	$query = "INSERT INTO tbl_question (question,service_type) VALUES(?,?)";
	$stmt = mysqli_prepare($dbc,$query);

	// (sssssssss) means 9 string data types.
	mysqli_stmt_bind_param($stmt,"ss",$question,$type);

	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows==1){
		echo "success";
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);
	} else {
		echo "Error occured. (".mysqli_error().")";
	}
?>