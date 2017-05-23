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
		    <?php include('partial/nav-left.php'); ?>
		  </div>
		  <div class="col-sm-9">
		    <div class="row">
		    	<div class="col-md-12">
		    		<div class="content-holder">
		    			<div class="row">
		    				<div class="col-md-6">
		    					<h3 style="margin:10px 0;">Registrarship Survey</h3>
		    				</div>
		    				<div class="col-md-6">
		    					<a href="add-question.php?service_type=registrarship" class="btn btn-success addbtn"><i class="glyphicon glyphicon-plus"></i> Add</a>
		    				</div>
		    			</div>
		    			
		    			<table class="table table-hover">
		    				<thead>
		    					<tr>
			    					<th>Question</th>
			    					<th>Action</th>
			    				</tr>	
		    				</thead>
		    				<tbody>
		    					<?php
		    						$query = "Select * from tbl_question where service_type='registrarship'";

									$resp = @mysqli_query($dbc, $query);
									if($resp){
										while($row=mysqli_fetch_array($resp)){
											echo '<tr>
													<td>'.$row["question"].'</td>
													<td>
														<span>
														<a href="edit-question.php?id='.$row['id'].'"><i class="glyphicon glyphicon-edit"></i></a>
														</span>
		    											<span class="del-question" data-type="general" data-id="'.$row['id'].'"><a><i class="glyphicon glyphicon-trash"></i></a></span></td>
												  </tr>';
										}
									}
									
		    					?>
		    				</tbody>
		    			</table>
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