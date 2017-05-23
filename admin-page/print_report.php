<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
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
		    			<h3>Report</h3>
		    			<h5><b>Surveyee List</b></h5>
		    			<div class="row">
			    			<div class="col-md-4 col-md-offset-1">
			    				<select class="form-control" id="print_category">
			    					<option value="all">All</option>
			    					<option value="gender">Gender</option>
			    					<option value="course">Course</option>
			    					<option value="year_level">Year Level</option>
			    					<option value="college">College/Department</option>
			    				</select>
			    			</div>
			    			<div class="col-md-3">
			    				<select id="print_column" class="form-control">
			    				</select>
			    			</div>
			    			<div class="col-md-3">
			    				<button id="print" class="btn btn-success btn-block">Print / Download</button>
			    			</div>
		    			</div>

		    			<h5><b>General Percentage</b></h5>
		    			<div class="row">
			    			<div class="col-md-4 col-md-offset-1">
			    				<select class="form-control" id="print_general">
			    					<option value="registrarship">Registrarship</option>
			    					<option value="osas">Office of Student Affairs and Services</option>
			    					<option value='guidance'>Guidance Services</option>
			    					<option value='admission'>Admission Services</option>
			    					<option value='counseling'>Counseling Services</option>
			    					<option value="testing">Testing Services</option>
			    					<option value='medical'>Medical Services</option>
			    					<option value='dental'>Dental Services</option>
			    					<option value='campus'>Campus Publication</option>
			    					<option value='canteen'>School Canteen</option>
			    					<option value='scholarship'>Scholarship Program</option>
			    					<option value='gad'>Gender and Development</option>
			    					<option value='library'>Library Services</option>
			    					<option value='research'>Research Office</option>
			    					<option value='cashier'>Cashier's Office</option>
			    					<option value='budget'>Budget & Finance / Accounting</option>
			    					<option value='security'>Security Services</option>
			    					<option value='infastructure'>Infastructure/Utilities</option>
			    					<option value='classroom'>Classroom</option>
			    					<option value='cr'>Comfort Rooms</option>
			    					<option value='science'>Science Laboratory</option>
			    					<option value='computer'>Computer Laboratory</option>
			    					<option value='bao'>Business Affairs</option>
			    					<option value='internet'>Internet Services</option>
			    					<option value='seminar'>Seminar/Training Halls</option>
			    					<option value='sport'>Sports Facilities</option>
			    					<option value='lounge'>Student Lounge</option>
			    					<!-- <option value='college'>College</option> -->
			    				</select>
			    			</div>
			    			<div class="col-md-3">
			    				
			    			</div>
			    			<div class="col-md-3">
			    				<button id="btn_print_general" class="btn btn-success btn-block">Print / Download</button>
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
	<!-- <script type="text/javascript" src="../js/pdfmake.min.js"></script>
	<script type="text/javascript" src="../js/vfs_fonts.js"></script> -->
	<script type="text/javascript" src="../js/function.js"></script>

	<script type="text/javascript">
		$('#btn_print_general').on('click',function(e){
			var win = window.open("report_filtered_general.php?description="+$('#print_general').val(),'_blank');
			win.focus();
		});
	</script>

	<script type="text/javascript">
	// alert($('#print_category').get[0].options[0].value);
	$('#print_column').hide();
	$('#print_category').on('change',function(){
		var cur = $(this).val();
		if(cur=='all'){
			$('#print_column').hide();
		} else {
			$.post('../php_func/show_column.php',
			{
				column:cur
			},function(data){
				var arrData = JSON.parse(data);
				arrData = arrData.filter((x,i,a)=>{return (a.indexOf(x)==i) && x});
				var printColumn = document.getElementById("print_column");
				
				printColumn.options.length = 0;
				// columnOptions =x {};
				arrData.forEach((val,i)=>{
					var option  = document.createElement("option");
					option.text = val;
					option.value = val;
					printColumn.add(option);
				})
				$('#print_column').show();
			})
		}
	})

	$('#print').on('click',function(){
		var printCategory = $('#print_category').val();
		if(printCategory=="all"){
			var win = window.open("report_student_list.php",'_blank');
			win.focus();
		} else {
			var categoryVal = $('#print_category').val();
			var categorySelected = null;
			if(categoryVal == "gender"){
				categorySelected = 'sex';
			} else if(categoryVal=="course"){
				categorySelected = 'course';
			} else if(categoryVal == "year_level"){
				categorySelected = 'year_level';
			} else if(categoryVal == 'college'){
				categorySelected = 'college';
			}
			var win = window.open("report_filtered.php?column="+categorySelected+"&data="+$('#print_column').val()+" ",'_blank');
			win.focus();
		}
		
	})
	</script>

	
</body>
</html>