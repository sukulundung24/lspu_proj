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
		    				<div class="form-group">
								<label for="txt_type" class="col-md-3 control-label">User Type:</label>
								<div class="col-md-8">
									<select id="txt_type" onchange="usertypealert()" class="form-control" name="type">
										<option value="admin">Admin</option>
										<option value="student">Student</option>
										<option value="employee">Employee</option>
									</select>
								</div>
							</div>

		    				<div class="form-group general-info">
								<label for="txt_fname" class="col-md-3 control-label">First Name:</label>
								<div class="col-md-8">
									<input id="txt_fname" class="form-control" type="text" name="fname">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_mname" class="col-md-3 control-label">Middle Name:</label>
								<div class="col-md-8">
									<input id="txt_mname" class="form-control" type="text" name="mname">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_lname" class="col-md-3 control-label">Last Name:</label>
								<div class="col-md-8">
									<input id="txt_lname" class="form-control" type="text" name="lname">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_idnum" class="col-md-3 control-label">ID Number:</label>
								<div class="col-md-8">
									<input id="txt_idnum" class="form-control" type="text" name="id_num">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_age" class="col-md-3 control-label">Age:</label>
								<div class="col-md-8">
									<input id="txt_age" class="form-control" type="text" name="age">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_gender" class="col-md-3 control-label">Gender:</label>
								<div class="col-md-8">
									<select id="txt_gender" class="form-control" name="gender">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_address" class="col-md-3 control-label">Address:</label>
								<div class="col-md-8">
									<textarea id="txt_address" class="form-control" type="text" name="address"></textarea>
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_status" class="col-md-3 control-label">Status:</label>
								<div class="col-md-8">
									<select id="txt_status" class="form-control" name="status">
										<option value="study-work">Studying/Working</option>
										<option value="graduate-resign">Graduate/resign</option>
										<option value="drop-kickout">Drop/Kickout</option>
									</select>
								</div>
							</div> 

							<div class="form-group employee-info">
								<label for="txt_office" class="col-md-3 control-label">Unit/Office:</label>
								<div class="col-md-8">
									<input id="txt_office" class="form-control" type="text" name="office">
								</div>
							</div>

							<div class="form-group employee-info">
								<label for="txt_position" class="col-md-3 control-label">Position:</label>
								<div class="col-md-8">
									<input id="txt_position" class="form-control" type="text" name="position">
								</div>
							</div>

							<div class="form-group">
							    <div class="col-md-offset-3 col-md-8">
							    	<button id="btn_register" type="button" class="btn btn-default">Register</button>
							    </div>
							</div>
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