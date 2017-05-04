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
		    			<h3><b>Survey</b></h3>

    			<!-- ============= General ================= -->
		    			<?php
		    				$query = "Select * from tbl_question where service_type ='general'";

							$resp = @mysqli_query($dbc, $query);
							if($resp){
						?>
							<h4><b>General</b></h4>
							<table class="table">
							<colgroup>
					            <col class="col-md-7">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					        </colgroup>
							<tr>
								<th></th>
								<th>5</th>
								<th>4</th>
								<th>3</th>
								<th>2</th>
								<th>1</th>
							</tr>
						<?php	
								$counter = 1;
								while($row=mysqli_fetch_array($resp)){
		    			?>
		    				<tr>
		    					<td class="gen-input" data-id="<?php $row['id'] ?>"><?php echo $row['question'] ?></td>
		    					<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="5" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="4" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="3" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="2" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="1" name="ans<?php echo $counter; ?>"></td>
		    				</tr>
		    			<?php $counter++; } ?>
		    				</table>
		    			<?php } ?>

		    			<br>

		    			<!-- ============= General ================= -->
		    			<?php
		    				$query = "Select * from tbl_question where service_type ='registrarship'";

							$resp = @mysqli_query($dbc, $query);
							if($resp){
						?>
							<h4><b>Admission & Registrarship</b></h4>
							<table class="table">
							<colgroup>
					            <col class="col-md-7">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					            <col class="col-md-1">
					        </colgroup>
							<tr>
								<th></th>
								<th>5</th>
								<th>4</th>
								<th>3</th>
								<th>2</th>
								<th>1</th>
							</tr>
						<?php	
								$counter = 1;
								while($row=mysqli_fetch_array($resp)){
		    			?>
		    				<tr>
		    					<td class="reg-input" data-id="<?php $row['id'] ?>"><?php echo $row['question'] ?></td>
		    					<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="5" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="4" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="3" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="2" name="ans<?php echo $counter; ?>"></td>
		    					<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="1" name="ans<?php echo $counter; ?>"></td>
		    				</tr>
		    			<?php $counter++; } ?>
		    				</table>
		    			<?php } ?>

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