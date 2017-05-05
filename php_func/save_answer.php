<?php
	require_once('connect.php');
	session_start();
	
	$username = $_SESSION['username'];
	// $question_id = $_POST['question_id'];
	// $answer = $_POST['answer'];
	if(isset($_POST['data'])){
		$data = $_POST['data'];
		$dataLength = count($data);

		for($i=0; $i<$dataLength; $i++){
			$query = "INSERT INTO tbl_answer (username,question_id,answer) VALUES(?,?,?)";
			$stmt = mysqli_prepare($dbc,$query);

			// (sssssssss) means 9 string data types.
			mysqli_stmt_bind_param($stmt,"sii",$username,$data[$i]['quest_id'],$data[$i]['answer']);

			mysqli_stmt_execute($stmt);

						
			if(($i+1) == $dataLength){
				$affected_rows = mysqli_stmt_affected_rows($stmt);
				if($affected_rows==1){
					echo "success";
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
				} else {
					echo "Error occured. (".mysqli_error().")";
				}
			}		
			// print_r($data[$i]);
		}

	} else {
		echo "Please complete the form.";
	}
	// $query = "INSERT INTO tbl_question (question,service_type) VALUES(?,?)";
	// $stmt = mysqli_prepare($dbc,$query);

	// // (sssssssss) means 9 string data types.
	// mysqli_stmt_bind_param($stmt,"ss",$question,$type);

	// mysqli_stmt_execute($stmt);
	// $affected_rows = mysqli_stmt_affected_rows($stmt);
	// if($affected_rows==1){
	// 	echo "success";
	// 	mysqli_stmt_close($stmt);
	// 	mysqli_close($dbc);
	// } else {
	// 	echo "Error occured. (".mysqli_error().")";
	// }
?>