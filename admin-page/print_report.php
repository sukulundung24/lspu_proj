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
			    					<option>test</option>
			    				</select>
			    			</div>
			    			<div class="col-md-3">
			    				<button id="print" class="btn btn-success btn-block">Print</button>
			    			</div>
			    			<div class="col-md-3">
			    				<button id="download" class="btn btn-primary btn-block">Download</button>
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
	$('#print').on('click',function(){
		location.href = "report_student_list.php";
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