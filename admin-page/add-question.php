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
		include('partial/nav-top.php')
	?>

		<div class="row">
		  <div class="col-sm-3">
		    <?php include('partial/nav-left.php');
		    ?>

		  </div>
		  <div class="col-sm-9">
		    <div class="row">
		    	<div class="col-md-12">
		    		<div class="content-holder">
		    			<h3>Edit Question</h3>
		    			<form class="form-horizontal">
		    				<div class="form-group">
								<label for="txt_question" class="col-md-3 control-label">Question:</label>
								<div class="col-md-8">
									<?php
									$link = 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];

									$query_str = parse_url($link, PHP_URL_QUERY);
									parse_str($query_str, $query_params);
									?>
									<textarea data-type="<?php echo $query_params['service_type'];?>" id="txt_question" class="form-control" type="text" name="question"></textarea>
								</div>
							</div>

							<div class="form-group">
							    <div class="col-md-offset-3 col-md-8">
							    	<button id="btn_cancel_question" type="button" class="btn btn-danger">Cancel</button>
							    	<button id="btn_add_question" type="button" class="btn btn-success">Save</button>
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
</body>
</html>