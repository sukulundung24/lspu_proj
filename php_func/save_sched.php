<?php
	require_once('../php_func/connect.php');
	session_start();
	
	$first_month = $_POST['month1'];
	$first_date = $_POST['date1'];
	$second_month = $_POST['month2'];
	$second_date = $_POST['date2'];


	$query ="UPDATE tbl_sem_schedule SET 1st_sem_month = ?, 1st_sem_date = ?, 2nd_sem_month = ?, 2nd_sem_date = ?";

	$stmt = mysqli_prepare($dbc,$query);

	mysqli_stmt_bind_param($stmt,"iiii",$first_month,$first_date,$second_month,$second_date);

	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);

	if($affected_rows==1){
		echo "success";
		mysqli_close($dbc);
	} else {
		echo "Error occured. ";
	}

	// $question_id = $_POST['question_id'];
	// $answer = $_POST['answer'];
		// $data = $_POST['data'];
		// $dataLength = count($data);
		// for($i=0; $i<$dataLength; $i++){
		// 	$query = "INSERT INTO tbl_answer (username,question_id,answer,answer_2,answer_3) VALUES(?,?,?,?,?)";
		// 	$stmt = mysqli_prepare($dbc,$query);

		// 	// (sssssssss) means 9 string data types.
		// 	// print_r($stmtxx);
		// 	mysqli_stmt_bind_param($stmt,"ssiii",$username,$data[$i]['quest_id'],$data[$i]['answer1'],$data[$i]['answer2'],$data[$i]['answer3']);

		// 	mysqli_stmt_execute($stmt);

		// 			$affected_rows = mysqli_stmt_affected_rows($stmt);	
		// 	if(($i+1) == $dataLength){
		// 		// $affected_rows = mysqli_stmt_affected_rows($stmt);
		// 		if($affected_rows>0){
		// 			echo "success";
		// 			mysqli_stmt_close($stmt);
		// 			mysqli_close($dbc);
		// 		} else {
		// 			echo "Error occured. (".mysqli_error().")";
		// 		}
		// 	}		
		// 	// print_r($data[$i]);
		// }

	
?>