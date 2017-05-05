<?php
	require_once('connect.php');
	session_start();
	
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$c_password = $_POST['c_password'];
	$user_type = $_POST['user_type'];
	$id_num = $_POST['id_num'];
	$office = $_POST['office'];
	$position = $_POST['position'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($fname && $mname && $lname && $user_type && $c_password && $user_type && $id_num && $office && $position && $username && $password){
		if($password == $c_password){
			$query = "Select * from tbl_user where username='".$username."' ";
			$response = @mysqli_query($dbc, $query);

			if($response->num_rows >0){
				echo "Username already taken!";
			} else {
				$query = "INSERT INTO tbl_user (username,password,fname,mname,lname,type,id_num,office,position) VALUES(?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_prepare($dbc,$query);

				// (sssssssss) means 9 string data types.
				mysqli_stmt_bind_param($stmt,"sssssssss",$username,$password,$fname,$mname,$lname,$user_type,$id_num,$office,$position);

				mysqli_stmt_execute($stmt);
				$affected_rows = mysqli_stmt_affected_rows($stmt);
				if($affected_rows==1){
					echo "success";
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
				} else {
					echo "Error occured. (".mysqli_error().")";
				}
			}
		} else {
			echo "Password didn't match!";
		}
	} else {
		echo "Please complete the form!";
	}

	
	

	// $response = @mysqli_query($dbc, $query);
	// $row = mysqli_fetch_array($response);

	// if($row){
	// 	$_SESSION['username'] = $username;
	// 	echo $row['type'];
	// } else {
	// 	echo '';
	// }
?>