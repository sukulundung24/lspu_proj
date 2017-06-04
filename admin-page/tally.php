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
			    			<select id="category_tally" class="form-control">
			    				<option value='all'>All</option>
			    				<option value='gender'>Gender</option>
			    				<option value='course'>Course</option>
			    				<option value='year_level'>Year Level</option>
			    			</select>
		    			</div>
		    			<br> <br> <br><br><br>
		    			<canvas id="tally_chart" width="400" height="200"></canvas>
		    			<br><br><br><br>
		    			<div class="row">
		    				<div class="col-md-7">
		    					# of students/employee who take the survey: <span class="tot_num_take">1</span>
		    				</div> 
		    			</div>
		    			<div class="row">
		    				<div class="col-md-7">
		    					# of students/employee who do not take the survey: <span class="tot_num_not_take">1</span>
		    				</div> 
		    			</div>
		    			<div class="row">
		    				<div class="col-md-7">
		    					Total Number: <span class="tot_num">1</span>
		    				</div> 
		    			</div>
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


		$queryStudentTotal = "select count(*) from tbl_id_number";
		$resp5 = @mysqli_query($dbc,$queryStudentTotal);
		$row5 = mysqli_fetch_array($resp5);

		$totalStudent_temp = $row5[0] - $row4[0];

		$subTotal = ($row3[0] - $row4[0]) + $row2[0];
		$tempTotal = (($row5[0]-$row[0])/$row5[0])*100;

		$tempFinish = ($row[0]/$row5[0])*100;

		$query6 = "select count(*) from student_survey_status where status = 'finish'";
		$resp6 = @mysqli_query($dbc,$query6);
		$row6 = mysqli_fetch_array($resp6); 
		echo "<script> $('.tot_num_take').html('<b>".$row6[0]."</b>'); </script>";
		echo "<script> $('.tot_num').html('<b>".$row5[0]."</b>'); </script>";
		$notTake = $row5[0] - $row6[0];
		echo "<script> $('.tot_num_not_take').html('<b>".$notTake."</b>'); </script>";

	echo '<script type="text/javascript">var ctx = document.getElementById("tally_chart");var newChart = new Chart(ctx,{type: "bar",data: {labels: ["who take survey", "who did not"],datasets: [{label: ["Student of LSPU"],data: ['.$tempFinish.','.$tempTotal.'],backgroundColor: ["#4fff69","#4fb8ff"]}]},options: { scales: { yAxes: [{ tricks: { min:0, max:100 } }] } }})</script>';
	?>

	<script type="text/javascript">
		$('#category_tally').on('change',function(e){
			e.preventDefault();
			var cur = $(this).val();
			$.post('../php_func/taly.php',{
				category: cur
			},
			function(data){
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
					var arrData = JSON.parse(datas);
					var arrColor = [];
					var tot_num = 0;
					for(var i=0;i<arrData.length; i++){
						tot_num += parseInt(arrData[i]);
						if((i%2)==0){
							arrColor.push("#4fff69");
						} else {
							arrColor.push("#4fb8ff");
						}
					}
					// $('.tot_num').html(tot_num);
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