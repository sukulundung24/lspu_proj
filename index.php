<!DOCTYPE html>
<html>
<head>
	<title>LSPU - Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['username'])){
			if($_SESSION['user_type']=="admin"){
				header('Location: admin-page/dashboard.php');
			} else {
				header('Location: student-page/dashboard.php');
			}
		}
		include('header.php');
	?>

	<div class="row" style="margin: 100px 0;">
		<div class="col-md-offset-3 col-md-6">
			<div class="login-holder">
				<div id="login_error" class="row">
					<div class="col-md-12">
						<div id="error_message" class="alert alert-warning"></div>
					</div>
				</div>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="txt_username" class="col-md-3 control-label">Username:</label>
						<div class="col-md-8">
							<input id="txt_username" class="form-control" type="text" name="username">
						</div>
					</div>

					<div class="form-group">
						<label for="txt_password" class="col-md-3 control-label">Password:</label>
						<div class="col-md-8">
							<input id="txt_password" class="form-control" type="password" name="password">
						</div>
					</div>
					<div class="form-group">
					    <div class="col-md-offset-3 col-md-8">
					    	<button id="btn_login" type="button" class="btn btn-default">Sign in</button>
					    </div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</body>
</html>