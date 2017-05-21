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
		    			<h3>Tally</h3>
		    			<canvas id="tally_chart" width="400" height="200"></canvas>

		    		</div>
		    	</div>
		    </div>
		  </div>
		</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/chart.min.js"></script>
	<script type="text/javascript" src="../js/function.js"></script>
	<?php 
		$query = "Select count(*) from student_survey_status where status='finish'";
		$resp = @mysqli_query($dbc, $query);
		$row=mysqli_fetch_array($resp);
		
		$queryNotFinish = "Select count(*) from student_survey_status where status='not finish'";
		$resp2 = @mysqli_query($dbc, $queryNotFinish);
		$row2=mysqli_fetch_array($resp2);

		$queryTotal = "Select count(*) from tbl_user where type <> 'admin'";
		$resp3 = @mysqli_query($dbc,$queryTotal);
		$row3=mysqli_fetch_array($resp3);
	echo '<script type="text/javascript">var ctx = document.getElementById("tally_chart");var newChart = new Chart(ctx,{type: "bar",data: {labels: ["who take survey", "who did not"],datasets: [{label: ["Student of LSPU"],data: ['.$row[0].','.$row2[0].'],backgroundColor: ["#4fff69","#4fb8ff"]}]},options: { scales: { yAxes: [{ ticks: { min:0, max:'.$row3[0].' } }] } }})</script>';
	?>
</body>
</html>