<?php
	require_once('connect.php');

	$id = $_POST['id'];
	$question = $_POST['question'];


	$query = "UPDATE tbl_question SET question = ? where id='".$id."'";
	$stmt = mysqli_prepare($dbc,$query);

	mysqli_stmt_bind_param($stmt,"s",$question);

	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);

	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows==1){
		echo "success";
		mysqli_close($dbc);
	} else {
		echo "Error occured. (".mysqli_error().")";
	}
?>