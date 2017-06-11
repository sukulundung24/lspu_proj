<?php
	require_once('connect.php');
	session_start();
	
	$username = $_SESSION['username'];
	// $question_id = $_POST['question_id'];
	// $answer = $_POST['answer'];
	if(isset($_POST['general_data'])){
		$data = $_POST['general_data'];
		$dataLength = count($data);
		for($i=0; $i<$dataLength; $i++){
			$query = "INSERT INTO tbl_general (id_num,year,sem,description,ans1,ans2,remark) VALUES(?,?,?,?,?,?,?)";
			$stmt = mysqli_prepare($dbc,$query);

			$year = date("Y");
			$sem = "1st_sem";
			
			if(empty($data[$i]['remark'])){
				$data[$i]['remark'] = " ";
			}
			
			mysqli_stmt_bind_param($stmt,"ssssiis",$username,$year,$sem,$data[$i]['description'],$data[$i]['answer1'],$data[$i]['answer2'],$data[$i]['remark']);

			mysqli_stmt_execute($stmt);

			$affected_rows = mysqli_stmt_affected_rows($stmt);	
			if(($i+1) == $dataLength){
				if($affected_rows>0){
					echo "success";
				} else {
					echo "Error occured. (".mysqli_error().")";
				}
			}
		}

	} else {
		echo "Please complete the form.";
	}
?>
