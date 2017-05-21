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
	$password = $_POST['password'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$department = $_POST['department'];
	$course = $_POST['course'];
	$yrlvl = $_POST['yrlvl'];
	$sem = $_POST['sem'];
	$academic_year = $_POST['academic_year'];
	$office = $_POST['office'];
	$position = $_POST['position'];

	if($fname && $mname && $lname && $user_type && $c_password && $user_type && $id_num && $password){
		if($password == $c_password){
			$query = "Select * from tbl_user where id_num='".$id_num."' ";
			$response = @mysqli_query($dbc, $query);

			if($response->num_rows >0){
				echo "Already registered!";
			} else {
				$checkQuery = "Select * from tbl_id_number where id_num='".$id_num."'";
				$checkResponse = @mysqli_query($dbc,$checkQuery);
				if($checkResponse->num_rows >0 || $user_type == 'admin'){
					$query = "INSERT INTO tbl_user (password,fname,mname,lname,type,id_num,office,position,age,sex,address,course,year_level,status,college,semester,academic_yr) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$stmt = mysqli_prepare($dbc,$query);

					// (sssssssss) means 9 string data types.
					mysqli_stmt_bind_param($stmt,"ssssssssisssisssi",$password,$fname,$mname,$lname,$user_type,$id_num,$office,$position,$age,$gender,$address,$course,$yrlvl,$status,$department,$sem,$academic_year);

					mysqli_stmt_execute($stmt);
					$affected_rows = mysqli_stmt_affected_rows($stmt);
					if($user_type!="admin"){
						$query2 = "INSERT INTO student_survey_status (id_num,status) VALUES(?,?)";
						$stmt2 = mysqli_prepare($dbc,$query2);
						$statusSurvey = 'not finish';
						mysqli_stmt_bind_param($stmt2,'ss',$id_num,$statusSurvey);
						mysqli_stmt_execute($stmt2);
					}
					
					if($affected_rows==1){
						echo "success";
						mysqli_stmt_close($stmt);
						mysqli_close($dbc);
						
					} else {
						echo "Error occured. (".mysqli_error().")";
					}
				} else {
					echo 'Invalid ID number!';
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