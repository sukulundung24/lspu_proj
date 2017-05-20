<!DOCTYPE html>
<html>
<head>
	<title>
		Student - Dashboard
	</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php 
		include('get-name.php');
		include('partial/header.php');
		include('partial/nav-top.php');
	?>
	<?php 
		$query = "Select * from tbl_sem_schedule";
        $resp = @mysqli_query($dbc, $query);
        if($resp->num_rows>0){
	        while($row=mysqli_fetch_array($resp)){
	        	if((date("m")==$row['1st_sem_month'] && date("d")==$row['1st_sem_date']) || (date("m")==$row['2nd_sem_month'] && date("d")==$row['2nd_sem_date'])){

	        		$checkQuery = "Select * from student_survey_status where id_num = '".$_SESSION['username']."' ";

	        		$respChecker = @mysqli_query($dbc, $checkQuery);
        			if($resp->num_rows>0){
        				while($rowChecker=mysqli_fetch_array($respChecker)){
        					if($rowChecker['status']=="finish"){
        						$updateQuery = "UPDATE student_survey_status SET status = ? where id_num = '".$_SESSION['username']."'";

        						$stmt = mysqli_prepare($dbc,$updateQuery);
        						$updateStatus = "not finish";
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
						$updateStatus = "not finish";
						mysqli_stmt_bind_param($stmt,"ss",$_SESSION['username'],$updateStatus);

						mysqli_stmt_execute($stmt);
						$affected_rows = mysqli_stmt_affected_rows($stmt);

						if($affected_rows==1){
							mysqli_close($dbc);
						}
        			}
	        	}
	        }	
	    }

	?>
		<div class="row">
		  <div class="col-sm-3">
		  	<?php include('partial/nav-left.php'); ?>
		  </div>
		  <div class="col-sm-9">
		    <div class="row">
		    	<div class="col-md-12">
		    		<img class="cover-dash" src="../img/cover.png">
		    	</div>
		    </div>
		    <div class="row" style="margin-top:30px;">
		    	<div class="col-md-12">
		    		<div class="content-holder">
		    			<h4><b>AUTOMATED CLIENTELE SATISFACTION SURVEY EVALUATION AND ANALYSIS</b></h4>
		    			<br>
		    			<p><b>What is the name of the research poster?</b></p>
		    			<p>Short Message SXxervice (SMS) Information Notification System. Among the journals and researchexrs I have searched online, the main topic is the development of an Information and Notification</p>
		    			<br>
		    			<p><b>What particular subject area(s) / field of discxipline(s) is the research concerning with?</b></p>
		    			<p>The research is concerned with the process of distribution of announcements and information to the concerned individual or group of individuals. The system is used to notify an individual about any important information/announcement from the sender of the message. The system was developed for an institution or an organization with enormous and various number of subordinates.</p>
		    			<br>
		    			<p><b>Why was the research undertaken?</b></p>
		    			<p>To have the institution and/or organization a kind of system which may help them in the distribution and dispersing of important information, announcements or messages to its subordinates through Small Media Service(SMS) notification.</p>
		    		</div>
		    	</div>
		    </div>
		  </div>
		</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/function.js"></script>
</body>
</html>