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
		  <div class="col-sm-offset-2 col-sm-8">
		    <div class="row" style="margin-top:30px;">
		    	<div class="col-md-12">
		    		<div class="content-holder">
		    			<h3>Create User</h3>
		    			<div id="success_holder" class="row">
							<div class="col-md-12">
								<div id="success_message" class="alert alert-success"></div>
							</div>
						</div>
		    			<div id="error_holder" class="row">
							<div class="col-md-12">
								<div id="error_message" class="alert alert-danger"></div>
							</div>
						</div>
		    			<form class="form-horizontal">
		    				<input type="file" name="">
						</form>
		    		</div>
		    	</div>
		    </div>
		  </div>
		</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/function.js"></script>
	<script type="text/javascript">
		function usertypealert(){
			var cur_val = $('#txt_type').val();
			if(cur_val=="student"){

			}
		}
	</script>
</body>
</html>