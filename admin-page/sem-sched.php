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
		    			<h3>Semester Schedule</h3>
		    			<form class="form-horizontal">
		    			<?php 
		    				$query = "Select * from tbl_sem_schedule";
		    				$resp = @mysqli_query($dbc, $query);
							if($resp){
								while($row=mysqli_fetch_array($resp)){
		    			?>
		    				<center><h4>1st Semester</h4></center>
		    				<div class="form-group">
								<label for="txt_first_date" class="col-md-2 control-label">Date:</label>
								<div class="col-md-3">
									<select id="txt_first_date" class="form-control" name="type">
										<?php 
											for($i=1; $i<32; $i++){
												if($row['1st_sem_date']==$i){
													echo '<option value="'.$i.'" selected>'.$i.'</option>';
												} else {
													echo '<option value="'.$i.'">'.$i.'</option>';
												}
											}
										?>
									</select>
								</div>
								<label for="txt_first_month" class="col-md-3 control-label">Month:</label>
								<div class="col-md-3">
									<select id="txt_first_month" class="form-control" name="type">
										<option value="1" <?php if($row['1st_sem_month']==1){echo 'selected';}?>>January</option>
										<option value="2" <?php if($row['1st_sem_month']==2){echo 'selected';}?>>February</option>
										<option value="3" <?php if($row['1st_sem_month']==3){echo 'selected';}?>>March</option>
										<option value="4" <?php if($row['1st_sem_month']==4){echo 'selected';}?>>April</option>
										<option value="5" <?php if($row['1st_sem_month']==5){echo 'selected';}?>>May</option>
										<option value="6" <?php if($row['1st_sem_month']==6){echo 'selected';}?>>June</option>
										<option value="7" <?php if($row['1st_sem_month']==7){echo 'selected';}?>>July</option>
										<option value="8" <?php if($row['1st_sem_month']==8){echo 'selected';}?>>August</option>
										<option value="9" <?php if($row['1st_sem_month']==9){echo 'selected';}?>>September</option>
										<option value="10" <?php if($row['1st_sem_month']==10){echo 'selected';}?>>October</option>
										<option value="11" <?php if($row['1st_sem_month']==11){echo 'selected';}?>>November</option>
										<option value="12" <?php if($row['1st_sem_month']==12){echo 'selected';}?>>December</option>
									</select>
								</div>
							</div>
							<br>
							<center><h4>2nd Semester</h4></center>
		    				<div class="form-group">
								<label for="txt_second_date" class="col-md-2 control-label">Date:</label>
								<div class="col-md-3">
									<select id="txt_second_date" class="form-control" name="type">
										<?php 
											for($i=1; $i<32; $i++){
												if($row['2nd_sem_date']==$i){
													echo '<option value="'.$i.'" selected>'.$i.'</option>';
												} else {
													echo '<option value="'.$i.'">'.$i.'</option>';
												}
											}
										?>
									</select>
								</div>
								<label for="txt_second_month" class="col-md-3 control-label">Month:</label>
								<div class="col-md-3">
									<select id="txt_second_month" class="form-control" name="type">
										<option value="1" <?php if($row['2nd_sem_month']==1){echo 'selected';}?>>January</option>
										<option value="2" <?php if($row['2nd_sem_month']==2){echo 'selected';}?>>February</option>
										<option value="3" <?php if($row['2nd_sem_month']==3){echo 'selected';}?>>March</option>
										<option value="4" <?php if($row['2nd_sem_month']==4){echo 'selected';}?>>April</option>
										<option value="5" <?php if($row['2nd_sem_month']==5){echo 'selected';}?>>May</option>
										<option value="6" <?php if($row['2nd_sem_month']==6){echo 'selected';}?>>June</option>
										<option value="7" <?php if($row['2nd_sem_month']==7){echo 'selected';}?>>July</option>
										<option value="8" <?php if($row['2nd_sem_month']==8){echo 'selected';}?>>August</option>
										<option value="9" <?php if($row['2nd_sem_month']==9){echo 'selected';}?>>September</option>
										<option value="10" <?php if($row['2nd_sem_month']==10){echo 'selected';}?>>October</option>
										<option value="11" <?php if($row['2nd_sem_month']==11){echo 'selected';}?>>November</option>
										<option value="12" <?php if($row['2nd_sem_month']==12){echo 'selected';}?>>December</option>
									</select>
								</div>
							</div>
							<center><button type="button" id="btn_save_sem_sched" class="btn btn-success">Save</button></center>
						<?php 
							}}
						?>	
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