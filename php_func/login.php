<?php
	require_once('connect.php');
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "Select * from tbl_user where id_num='".$username."' and password='".$password."'";

	$response = @mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($response);

	if($row){
		$_SESSION['username'] = $username;
		$_SESSION['user_type'] = $row['type'];
		echo $row['type'];
	} else {
		echo '';
	}
?>