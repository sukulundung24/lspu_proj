<?php
	require_once('../php_func/connect.php');
	session_start();

	if(isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['user_type'] =='student'){
		$query = "Select * from tbl_user where username='".$_SESSION['username']."'";

		$response = @mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($response);
		$name = $row['fname'] . ' '. $row['lname'];
	} else {
		header('Location: ../index.php'); 
	}
	
?>