<!DOCTYPE html>
<html>
<head>
	<title>
		Admin - Dashboard
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

		<div class="row">
		  <div class="col-sm-3">
		  	<?php include('partial/nav-left.php'); ?>
		  </div>
		  <div class="col-sm-9">
		    <div class="row">
		    	<div class="col-md-12">
		    		<div class="content-holder">
		    			<h3><b>Survey</b></h3>
		    			<div class="general-service">
		    				<?php include('general-survey.php');?>
		    			</div>
		    			<div class="main-services">
    						<?php include('questionaire.php') ?>
						</div>
		    			<br>
		    			
		    			<button id="back-survey" class="btn btn-default">Back</button>
		    			<button id="next-survey" class="btn btn-success">Next</button>
		    			<button id="submit-survey" class="btn btn-success">Finish</button>
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