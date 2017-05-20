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
		    			<h3>Create Admin User</h3>
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
									<select id="txt_type" onchange="usertypealert()" class="form-control" name="type" read-only>
										<option value="admin" selected>Admin</option>
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
								<label for="txt_password" class="col-md-3 control-label">Password:</label>
								<div class="col-md-8">
									<input id="txt_password" class="form-control" type="password" name="password">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_cpassword" class="col-md-3 control-label">Confirm Password:</label>
								<div class="col-md-8">
									<input id="txt_cpassword" class="form-control" type="password" name="cpassword">
								</div>
							</div>

							<div class="form-group general-info">
								<label for="txt_age" class="col-md-3 control-label">Age:</label>
								<div class="col-md-8">
									<input id="txt_age" class="form-control" type="number" name="age">
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

							<div class="form-group student-info">
								<label for="txt_department" class="col-md-3 control-label">Department:</label>
								<div class="col-md-8">
									<input type="text" id="txt_department" class="form-control">
								</div>
							</div>

							<div class="form-group student-info">
								<label for="txt_yrlvl" class="col-md-3 control-label">Year Level:</label>
								<div class="col-md-8">
									<input type="number" id="txt_yrlvl" class="form-control">
								</div>
							</div>

							<div class="form-group student-info">
								<label for="txt_course" class="col-md-3 control-label">Course:</label>
								<div class="col-md-8">
									<select id="txt_course" class="form-control">
										<option value="bscs">BS Computer Science</option>
										<option value="bsit">BS Information Technology</option>
										<option value="bshrm">BS Hospitality and Restaurant Management</option>
										<option value="bsp">BS Psychology</option>
									</select>
								</div>
							</div>

							<div class="form-group student-info">
								<label for="txt_sem" class="col-md-3 control-label">Semester:</label>
								<div class="col-md-8">
									<select id="txt_sem" class="form-control">
										<option value="1st_sem">1st Semester</option>
										<option value="2nd_sem">2nd Semester</option>
									</select>
								</div>
							</div>

							<div class="form-group student-info">
								<label for="txt_academic_year" class="col-md-3 control-label">Academic Year:</label>
								<div class="col-md-8">
									<input type="number" class="form-control" id="txt_academic_year">
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
							    	<button id="btn_register" type="button" class="btn btn-success">Register</button>
							    	<a href="index.php" class="btn btn-default">Cancel</a>
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
		
		$('#btn_register').on('click',function(e){
		e.preventDefault();

		$.post('php_func/register.php',
		{
			user_type: $('#txt_type').val(),
			fname: $('#txt_fname').val(),
			mname: $('#txt_mname').val(),
			lname: $('#txt_lname').val(),
			c_password: $('#txt_cpassword').val(),
			password: $('#txt_password').val(),
			id_num: $('#txt_idnum').val().toString(),
			age: $('#txt_age').val(),
			gender: $('#txt_gender').val(),
			address: $('#txt_address').val(),
			status: $('#txt_status').val(),
			department: $('#txt_department').val(),
			course: $('#txt_course').val(),
			yrlvl: $('#txt_yrlvl').val(),
			sem: $('#txt_sem').val(),
			academic_year: $('#txt_academic_year').val(),
			office: $('#txt_office').val(),
			position: $('#txt_position').val()
		},function(data){
			if(data=="success"){
				location.href="dashboard.php";
			}
		})
	})

	</script>
	<script type="text/javascript">
		$('.employee-info').hide();
		$('.student-info').hide();
		function usertypealert(){
			var cur_val = $('#txt_type').val();
			if(cur_val=="student"){
				$('.employee-info').hide();
				$('.student-info').show();
			} else if(cur_val=="employee") {
				$('.employee-info').show();
				$('.student-info').hide();
			} else {
				$('.employee-info').hide();
				$('.student-info').hide();
			}
		}
	</script>
</body>
</html>