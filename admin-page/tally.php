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
		    			<div class="col-md-offset-8 col-md-4">
			    			<select id="category" class="form-control">
			    				<option value='all'>All</option>
			    				<option value='gender'>Gender</option>
			    				<option value='course'>Course</option>
			    				<option value='year_level'>Year Level</option>
			    			</select>
		    			</div>
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

		$queryTotal = "Select count(*) from tbl_user where type <> 'admin' and status='study-work'";
		$resp3 = @mysqli_query($dbc,$queryTotal);
		$row3=mysqli_fetch_array($resp3);

		$querySurveyTotal = "Select count(*) from student_survey_status";
		$resp4 = @mysqli_query($dbc,$querySurveyTotal);
		$row4 = mysqli_fetch_array($resp4);

		$subTotal = ($row3[0] - $row4[0]) + $row2[0];
		$tempTotal = ($subTotal/$row3[0])*100;

		$tempFinish = ($row[0]/$row3[0])*100;

	echo '<script type="text/javascript">var ctx = document.getElementById("tally_chart");var newChart = new Chart(ctx,{type: "bar",data: {labels: ["who take survey", "who did not"],datasets: [{label: ["Student of LSPU"],data: ['.$tempFinish.','.$tempTotal.'],backgroundColor: ["#4fff69","#4fb8ff"]}]},options: { scales: { yAxes: [{ tricks: { min:0, max:100 } }] } }})</script>';
	?>

	<script type="text/javascript">
		$('#category').on('change',function(e){
			e.preventDefault();
			var cur = $(this).val();
			$.post('../php_func/taly.php',{
				category: cur
			},
			function(data){
				alert(data)
				if(cur == "all"){
					location.reload();
				}
				var ctx = $('#tally_chart');
				var arr = JSON.parse(data);
				arr.splice(0,1);
				arr = arr.filter((x,i,a)=>{return a.indexOf(x)==i});
				$.post('../php_func/filter_student.php',{
					data:arr,
					category: cur
				},
				function(datas){
					alert(datas);
					var arrData = JSON.parse(datas);
					var arrColor = [];
					alert(arrData.length);
					for(var i=0;i<arrData.length; i++){
						if((i%2)==0){
							arrColor.push("#4fff69");
						} else {
							arrColor.push("#4fb8ff");
						}
					}
					alert(arrColor.length);

					var newChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels:arr,
							datasets: [{
								label: ['tally sheet'],
								data: arrData,
								backgroundColor: arrColor
							}]
						},
						options: {
							scales: {
								yAxes: [{
									tricks: {
										min:0,
										max:100
									}
								}]
							}
						}
					})
				})
				
			})
		})
	</script>
</body>
</html>