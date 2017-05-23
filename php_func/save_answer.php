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
			$query = "INSERT INTO tbl_answer (username,question_id,answer,answer_2,answer_3) VALUES(?,?,?,?,?)";
			$stmt = mysqli_prepare($dbc,$query);

			// (sssssssss) means 9 string data types.
			// print_r($stmtxx);
			mysqli_stmt_bind_param($stmt,"ssiii",$username,$data[$i]['quest_id'],$data[$i]['answer1'],$data[$i]['answer2'],$data[$i]['answer3']);

			mysqli_stmt_execute($stmt);

					$affected_rows = mysqli_stmt_affected_rows($stmt);	
			if(($i+1) == $dataLength){
				// $affected_rows = mysqli_stmt_affected_rows($stmt);
				if($affected_rows>0){
					
					$checkQuery = "Select * from student_survey_status where id_num = '".$_SESSION['username']."' ";

	        		$respChecker = @mysqli_query($dbc, $checkQuery);
        			if($respChecker->num_rows>0){
        				while($rowChecker=mysqli_fetch_array($respChecker)){
        					if($rowChecker['status']=="not finish"){
        						$updateQuery = "UPDATE student_survey_status SET status = ? where id_num = '".$_SESSION['username']."'";

        						$stmt = mysqli_prepare($dbc,$updateQuery);
        						$updateStatus = "finish";
								mysqli_stmt_bind_param($stmt,"s",$updateStatus);

								mysqli_stmt_execute($stmt);
								$affected_rows = mysqli_stmt_affected_rows($stmt);

								if($affected_rows==1){
									mysqli_close($dbc);
								}
								
        					}
        				}
        			} else {
        				$insertQuery = "INSERT INTO student_survey_status (id_num,status) VALUES(?,?)";

						$stmt = mysqli_prepare($dbc,$insertQuery);
						$updateStatus = "finish";
						mysqli_stmt_bind_param($stmt,"ss",$_SESSION['username'],$updateStatus);

						mysqli_stmt_execute($stmt);
						$affected_rows = mysqli_stmt_affected_rows($stmt);

						if($affected_rows==1){
							mysqli_close($dbc);
						}
        			}



					echo "success";
					// mysqli_stmt_close($stmt);
					// mysqli_close($dbc);

				


				} else {
					echo "Error occured. (".mysqli_error().")";
				}
			}		
			// print_r($data[$i]);
		}

	} else {
		echo "Please complete the form. save";
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