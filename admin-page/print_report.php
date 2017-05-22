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
		    			<div class="row">
			    			<div class="col-md-4 col-md-offset-1">
			    				<select class="form-control" id="print_category">
			    					<option value="all">All Student</option>
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
	
		// function getBase64FromImageUrl(url) {
		//     var img = new Image();

		//     img.setAttribute('crossOrigin', 'anonymous');

		//     img.onload = function () {
		//         var canvas = document.createElement("canvas");
		//         canvas.width =this.width;
		//         canvas.height =this.height;

		//         var ctx = canvas.getContext("2d");
		//         ctx.drawImage(this, 0, 0);

		//         var dataURL = canvas.toDataURL("image/png");

		//         return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
		//     };

		//     img.src = url;
		// }

		// var dd = {
		// 	content: [
		// 		{
		// 			table: {
		// 				widths:['auto','auto','auto'],
		// 				body: [
		// 					[{image:getBase64FromImageUrl('../img/cover 3.png')}]
		// 				]
		// 			}
		// 		}
		// 	]
		// }

		// $('#print').on('click',function(e){
		// 	getBase64FromImageUrl('../img/cover 3.png');
		// 	pdfMake.createPdf(dd).open();
		// })
	</script>

	
</body>
</html>