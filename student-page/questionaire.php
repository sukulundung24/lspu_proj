<!-- ============= General ================= -->


<!-- ============= registrarship ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='registrarship'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Admission & Registrarship</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="reg-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_registrarship-ans<?php echo $counter; ?>" type="radio" value="5" name="1_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_registrarship-ans<?php echo $counter; ?>" type="radio" value="4" name="1_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_registrarship-ans<?php echo $counter; ?>" type="radio" value="3" name="1_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_registrarship-ans<?php echo $counter; ?>" type="radio" value="2" name="1_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_registrarship-ans<?php echo $counter; ?>" type="radio" value="1" name="1_registrarship-ans<?php echo $counter; ?>"></td>

		<td><input class="2_registrarship-ans<?php echo $counter; ?>" type="radio" value="5" name="2_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_registrarship-ans<?php echo $counter; ?>" type="radio" value="4" name="2_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_registrarship-ans<?php echo $counter; ?>" type="radio" value="3" name="2_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_registrarship-ans<?php echo $counter; ?>" type="radio" value="2" name="2_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_registrarship-ans<?php echo $counter; ?>" type="radio" value="1" name="2_registrarship-ans<?php echo $counter; ?>"></td>

		<td><input class="3_registrarship-ans<?php echo $counter; ?>" type="radio" value="5" name="3_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_registrarship-ans<?php echo $counter; ?>" type="radio" value="4" name="3_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_registrarship-ans<?php echo $counter; ?>" type="radio" value="3" name="3_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_registrarship-ans<?php echo $counter; ?>" type="radio" value="2" name="3_registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_registrarship-ans<?php echo $counter; ?>" type="radio" value="1" name="3_registrarship-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Alumni ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='alumni'";

	$resp = @mysqli_query($dbc, $query);

	if($resp->num_rows > 0){
?>
	<h4><b>Alumni Affairs & Placement</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="alu-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_alumni-ans<?php echo $counter; ?>" type="radio" value="5" name="1_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="1_alumni-ans<?php echo $counter; ?>" type="radio" value="4" name="1_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="1_alumni-ans<?php echo $counter; ?>" type="radio" value="3" name="1_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="1_alumni-ans<?php echo $counter; ?>" type="radio" value="2" name="1_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="1_alumni-ans<?php echo $counter; ?>" type="radio" value="1" name="1_alumni-ans<?php echo $counter; ?>"></td>

		<td><input class="2_alumni-ans<?php echo $counter; ?>" type="radio" value="5" name="2_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="2_alumni-ans<?php echo $counter; ?>" type="radio" value="4" name="2_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="2_alumni-ans<?php echo $counter; ?>" type="radio" value="3" name="2_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="2_alumni-ans<?php echo $counter; ?>" type="radio" value="2" name="2_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="2_alumni-ans<?php echo $counter; ?>" type="radio" value="1" name="2_alumni-ans<?php echo $counter; ?>"></td>

		<td><input class="3_alumni-ans<?php echo $counter; ?>" type="radio" value="5" name="3_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="3_alumni-ans<?php echo $counter; ?>" type="radio" value="4" name="3_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="3_alumni-ans<?php echo $counter; ?>" type="radio" value="3" name="3_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="3_alumni-ans<?php echo $counter; ?>" type="radio" value="2" name="3_alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="3_alumni-ans<?php echo $counter; ?>" type="radio" value="1" name="3_alumni-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Administration ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='administration'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Administration</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="adm-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_administration-ans<?php echo $counter; ?>" type="radio" value="5" name="1_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="1_administration-ans<?php echo $counter; ?>" type="radio" value="4" name="1_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="1_administration-ans<?php echo $counter; ?>" type="radio" value="3" name="1_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="1_administration-ans<?php echo $counter; ?>" type="radio" value="2" name="1_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="1_administration-ans<?php echo $counter; ?>" type="radio" value="1" name="1_administration-ans<?php echo $counter; ?>"></td>

		<td><input class="2_administration-ans<?php echo $counter; ?>" type="radio" value="5" name="2_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="2_administration-ans<?php echo $counter; ?>" type="radio" value="4" name="2_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="2_administration-ans<?php echo $counter; ?>" type="radio" value="3" name="2_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="2_administration-ans<?php echo $counter; ?>" type="radio" value="2" name="2_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="2_administration-ans<?php echo $counter; ?>" type="radio" value="1" name="2_administration-ans<?php echo $counter; ?>"></td>

		<td><input class="3_administration-ans<?php echo $counter; ?>" type="radio" value="5" name="3_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="3_administration-ans<?php echo $counter; ?>" type="radio" value="4" name="3_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="3_administration-ans<?php echo $counter; ?>" type="radio" value="3" name="3_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="3_administration-ans<?php echo $counter; ?>" type="radio" value="2" name="3_administration-ans<?php echo $counter; ?>"></td>
		<td><input class="3_administration-ans<?php echo $counter; ?>" type="radio" value="1" name="3_administration-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Accounting ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='accounting'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Accounting Office</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="acc-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_accounting-ans<?php echo $counter; ?>" type="radio" value="5" name="1_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="1_accounting-ans<?php echo $counter; ?>" type="radio" value="4" name="1_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="1_accounting-ans<?php echo $counter; ?>" type="radio" value="3" name="1_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="1_accounting-ans<?php echo $counter; ?>" type="radio" value="2" name="1_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="1_accounting-ans<?php echo $counter; ?>" type="radio" value="1" name="1_accounting-ans<?php echo $counter; ?>"></td>

		<td><input class="2_accounting-ans<?php echo $counter; ?>" type="radio" value="5" name="2_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="2_accounting-ans<?php echo $counter; ?>" type="radio" value="4" name="2_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="2_accounting-ans<?php echo $counter; ?>" type="radio" value="3" name="2_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="2_accounting-ans<?php echo $counter; ?>" type="radio" value="2" name="2_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="2_accounting-ans<?php echo $counter; ?>" type="radio" value="1" name="2_accounting-ans<?php echo $counter; ?>"></td>

		<td><input class="3_accounting-ans<?php echo $counter; ?>" type="radio" value="5" name="3_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="3_accounting-ans<?php echo $counter; ?>" type="radio" value="4" name="3_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="3_accounting-ans<?php echo $counter; ?>" type="radio" value="3" name="3_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="3_accounting-ans<?php echo $counter; ?>" type="radio" value="2" name="3_accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="3_accounting-ans<?php echo $counter; ?>" type="radio" value="1" name="3_accounting-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Business ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='business'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Business Affairs Office</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="bus-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_business-ans<?php echo $counter; ?>" type="radio" value="5" name="1_business-ans<?php echo $counter; ?>"></td>
		<td><input class="1_business-ans<?php echo $counter; ?>" type="radio" value="4" name="1_business-ans<?php echo $counter; ?>"></td>
		<td><input class="1_business-ans<?php echo $counter; ?>" type="radio" value="3" name="1_business-ans<?php echo $counter; ?>"></td>
		<td><input class="1_business-ans<?php echo $counter; ?>" type="radio" value="2" name="1_business-ans<?php echo $counter; ?>"></td>
		<td><input class="1_business-ans<?php echo $counter; ?>" type="radio" value="1" name="1_business-ans<?php echo $counter; ?>"></td>

		<td><input class="2_business-ans<?php echo $counter; ?>" type="radio" value="5" name="2_business-ans<?php echo $counter; ?>"></td>
		<td><input class="2_business-ans<?php echo $counter; ?>" type="radio" value="4" name="2_business-ans<?php echo $counter; ?>"></td>
		<td><input class="2_business-ans<?php echo $counter; ?>" type="radio" value="3" name="2_business-ans<?php echo $counter; ?>"></td>
		<td><input class="2_business-ans<?php echo $counter; ?>" type="radio" value="2" name="2_business-ans<?php echo $counter; ?>"></td>
		<td><input class="2_business-ans<?php echo $counter; ?>" type="radio" value="1" name="2_business-ans<?php echo $counter; ?>"></td>

		<td><input class="3_business-ans<?php echo $counter; ?>" type="radio" value="5" name="3_business-ans<?php echo $counter; ?>"></td>
		<td><input class="3_business-ans<?php echo $counter; ?>" type="radio" value="4" name="3_business-ans<?php echo $counter; ?>"></td>
		<td><input class="3_business-ans<?php echo $counter; ?>" type="radio" value="3" name="3_business-ans<?php echo $counter; ?>"></td>
		<td><input class="3_business-ans<?php echo $counter; ?>" type="radio" value="2" name="3_business-ans<?php echo $counter; ?>"></td>
		<td><input class="3_business-ans<?php echo $counter; ?>" type="radio" value="1" name="3_business-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Cashier ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='cashier'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Cashier's Office</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="cas-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_cashier-ans<?php echo $counter; ?>" type="radio" value="5" name="1_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="1_cashier-ans<?php echo $counter; ?>" type="radio" value="4" name="1_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="1_cashier-ans<?php echo $counter; ?>" type="radio" value="3" name="1_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="1_cashier-ans<?php echo $counter; ?>" type="radio" value="2" name="1_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="1_cashier-ans<?php echo $counter; ?>" type="radio" value="1" name="1_cashier-ans<?php echo $counter; ?>"></td>

		<td><input class="2_cashier-ans<?php echo $counter; ?>" type="radio" value="5" name="2_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="2_cashier-ans<?php echo $counter; ?>" type="radio" value="4" name="2_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="2_cashier-ans<?php echo $counter; ?>" type="radio" value="3" name="2_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="2_cashier-ans<?php echo $counter; ?>" type="radio" value="2" name="2_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="2_cashier-ans<?php echo $counter; ?>" type="radio" value="1" name="2_cashier-ans<?php echo $counter; ?>"></td>

		<td><input class="3_cashier-ans<?php echo $counter; ?>" type="radio" value="5" name="3_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="3_cashier-ans<?php echo $counter; ?>" type="radio" value="4" name="3_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="3_cashier-ans<?php echo $counter; ?>" type="radio" value="3" name="3_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="3_cashier-ans<?php echo $counter; ?>" type="radio" value="2" name="3_cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="3_cashier-ans<?php echo $counter; ?>" type="radio" value="1" name="3_cashier-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Clinic ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='clinic'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Clinic</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="cli-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_clinic-ans<?php echo $counter; ?>" type="radio" value="5" name="1_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="1_clinic-ans<?php echo $counter; ?>" type="radio" value="4" name="1_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="1_clinic-ans<?php echo $counter; ?>" type="radio" value="3" name="1_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="1_clinic-ans<?php echo $counter; ?>" type="radio" value="2" name="1_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="1_clinic-ans<?php echo $counter; ?>" type="radio" value="1" name="1_clinic-ans<?php echo $counter; ?>"></td>

		<td><input class="2_clinic-ans<?php echo $counter; ?>" type="radio" value="5" name="2_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="2_clinic-ans<?php echo $counter; ?>" type="radio" value="4" name="2_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="2_clinic-ans<?php echo $counter; ?>" type="radio" value="3" name="2_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="2_clinic-ans<?php echo $counter; ?>" type="radio" value="2" name="2_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="2_clinic-ans<?php echo $counter; ?>" type="radio" value="1" name="2_clinic-ans<?php echo $counter; ?>"></td>

		<td><input class="3_clinic-ans<?php echo $counter; ?>" type="radio" value="5" name="3_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="3_clinic-ans<?php echo $counter; ?>" type="radio" value="4" name="3_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="3_clinic-ans<?php echo $counter; ?>" type="radio" value="3" name="3_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="3_clinic-ans<?php echo $counter; ?>" type="radio" value="2" name="3_clinic-ans<?php echo $counter; ?>"></td>
		<td><input class="3_clinic-ans<?php echo $counter; ?>" type="radio" value="1" name="3_clinic-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Extension ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='extension'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Extension & Training</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="ext-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_extension-ans<?php echo $counter; ?>" type="radio" value="5" name="1_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="1_extension-ans<?php echo $counter; ?>" type="radio" value="4" name="1_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="1_extension-ans<?php echo $counter; ?>" type="radio" value="3" name="1_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="1_extension-ans<?php echo $counter; ?>" type="radio" value="2" name="1_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="1_extension-ans<?php echo $counter; ?>" type="radio" value="1" name="1_extension-ans<?php echo $counter; ?>"></td>

		<td><input class="2_extension-ans<?php echo $counter; ?>" type="radio" value="5" name="2_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="2_extension-ans<?php echo $counter; ?>" type="radio" value="4" name="2_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="2_extension-ans<?php echo $counter; ?>" type="radio" value="3" name="2_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="2_extension-ans<?php echo $counter; ?>" type="radio" value="2" name="2_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="2_extension-ans<?php echo $counter; ?>" type="radio" value="1" name="2_extension-ans<?php echo $counter; ?>"></td>

		<td><input class="3_extension-ans<?php echo $counter; ?>" type="radio" value="5" name="3_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="3_extension-ans<?php echo $counter; ?>" type="radio" value="4" name="3_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="3_extension-ans<?php echo $counter; ?>" type="radio" value="3" name="3_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="3_extension-ans<?php echo $counter; ?>" type="radio" value="2" name="3_extension-ans<?php echo $counter; ?>"></td>
		<td><input class="3_extension-ans<?php echo $counter; ?>" type="radio" value="1" name="3_extension-ans<?php echo $counter; ?>"></td>

	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>

 

<!-- ============= Gender ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='gender'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Gender & Development</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="gend-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_gender-ans<?php echo $counter; ?>" type="radio" value="5" name="1_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="1_gender-ans<?php echo $counter; ?>" type="radio" value="4" name="1_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="1_gender-ans<?php echo $counter; ?>" type="radio" value="3" name="1_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="1_gender-ans<?php echo $counter; ?>" type="radio" value="2" name="1_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="1_gender-ans<?php echo $counter; ?>" type="radio" value="1" name="1_gender-ans<?php echo $counter; ?>"></td>

		<td><input class="2_gender-ans<?php echo $counter; ?>" type="radio" value="5" name="2_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="2_gender-ans<?php echo $counter; ?>" type="radio" value="4" name="2_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="2_gender-ans<?php echo $counter; ?>" type="radio" value="3" name="2_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="2_gender-ans<?php echo $counter; ?>" type="radio" value="2" name="2_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="2_gender-ans<?php echo $counter; ?>" type="radio" value="1" name="2_gender-ans<?php echo $counter; ?>"></td>

		<td><input class="3_gender-ans<?php echo $counter; ?>" type="radio" value="5" name="3_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="3_gender-ans<?php echo $counter; ?>" type="radio" value="4" name="3_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="3_gender-ans<?php echo $counter; ?>" type="radio" value="3" name="3_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="3_gender-ans<?php echo $counter; ?>" type="radio" value="2" name="3_gender-ans<?php echo $counter; ?>"></td>
		<td><input class="3_gender-ans<?php echo $counter; ?>" type="radio" value="1" name="3_gender-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



 <!-- ============= Guidance ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='guidance'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Guidance Counseling</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="gui-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_guidance-ans<?php echo $counter; ?>" type="radio" value="5" name="1_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="1_guidance-ans<?php echo $counter; ?>" type="radio" value="4" name="1_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="1_guidance-ans<?php echo $counter; ?>" type="radio" value="3" name="1_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="1_guidance-ans<?php echo $counter; ?>" type="radio" value="2" name="1_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="1_guidance-ans<?php echo $counter; ?>" type="radio" value="1" name="1_guidance-ans<?php echo $counter; ?>"></td>

		<td><input class="2_guidance-ans<?php echo $counter; ?>" type="radio" value="5" name="2_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="2_guidance-ans<?php echo $counter; ?>" type="radio" value="4" name="2_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="2_guidance-ans<?php echo $counter; ?>" type="radio" value="3" name="2_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="2_guidance-ans<?php echo $counter; ?>" type="radio" value="2" name="2_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="2_guidance-ans<?php echo $counter; ?>" type="radio" value="1" name="2_guidance-ans<?php echo $counter; ?>"></td>

		<td><input class="3_guidance-ans<?php echo $counter; ?>" type="radio" value="5" name="3_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="3_guidance-ans<?php echo $counter; ?>" type="radio" value="4" name="3_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="3_guidance-ans<?php echo $counter; ?>" type="radio" value="3" name="3_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="3_guidance-ans<?php echo $counter; ?>" type="radio" value="2" name="3_guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="3_guidance-ans<?php echo $counter; ?>" type="radio" value="1" name="3_guidance-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= ICTS ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='icts'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>ICTS</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="ict-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_icts-ans<?php echo $counter; ?>" type="radio" value="5" name="1_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="1_icts-ans<?php echo $counter; ?>" type="radio" value="4" name="1_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="1_icts-ans<?php echo $counter; ?>" type="radio" value="3" name="1_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="1_icts-ans<?php echo $counter; ?>" type="radio" value="2" name="1_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="1_icts-ans<?php echo $counter; ?>" type="radio" value="1" name="1_icts-ans<?php echo $counter; ?>"></td>

		<td><input class="2_icts-ans<?php echo $counter; ?>" type="radio" value="5" name="2_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="2_icts-ans<?php echo $counter; ?>" type="radio" value="4" name="2_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="2_icts-ans<?php echo $counter; ?>" type="radio" value="3" name="2_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="2_icts-ans<?php echo $counter; ?>" type="radio" value="2" name="2_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="2_icts-ans<?php echo $counter; ?>" type="radio" value="1" name="2_icts-ans<?php echo $counter; ?>"></td>

		<td><input class="3_icts-ans<?php echo $counter; ?>" type="radio" value="5" name="3_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="3_icts-ans<?php echo $counter; ?>" type="radio" value="4" name="3_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="3_icts-ans<?php echo $counter; ?>" type="radio" value="3" name="3_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="3_icts-ans<?php echo $counter; ?>" type="radio" value="2" name="3_icts-ans<?php echo $counter; ?>"></td>
		<td><input class="3_icts-ans<?php echo $counter; ?>" type="radio" value="1" name="3_icts-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Library ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='library'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Library</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="lib-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_library-ans<?php echo $counter; ?>" type="radio" value="5" name="1_library-ans<?php echo $counter; ?>"></td>
		<td><input class="1_library-ans<?php echo $counter; ?>" type="radio" value="4" name="1_library-ans<?php echo $counter; ?>"></td>
		<td><input class="1_library-ans<?php echo $counter; ?>" type="radio" value="3" name="1_library-ans<?php echo $counter; ?>"></td>
		<td><input class="1_library-ans<?php echo $counter; ?>" type="radio" value="2" name="1_library-ans<?php echo $counter; ?>"></td>
		<td><input class="1_library-ans<?php echo $counter; ?>" type="radio" value="1" name="1_library-ans<?php echo $counter; ?>"></td>

		<td><input class="2_library-ans<?php echo $counter; ?>" type="radio" value="5" name="2_library-ans<?php echo $counter; ?>"></td>
		<td><input class="2_library-ans<?php echo $counter; ?>" type="radio" value="4" name="2_library-ans<?php echo $counter; ?>"></td>
		<td><input class="2_library-ans<?php echo $counter; ?>" type="radio" value="3" name="2_library-ans<?php echo $counter; ?>"></td>
		<td><input class="2_library-ans<?php echo $counter; ?>" type="radio" value="2" name="2_library-ans<?php echo $counter; ?>"></td>
		<td><input class="2_library-ans<?php echo $counter; ?>" type="radio" value="1" name="2_library-ans<?php echo $counter; ?>"></td>

		<td><input class="3_library-ans<?php echo $counter; ?>" type="radio" value="5" name="3_library-ans<?php echo $counter; ?>"></td>
		<td><input class="3_library-ans<?php echo $counter; ?>" type="radio" value="4" name="3_library-ans<?php echo $counter; ?>"></td>
		<td><input class="3_library-ans<?php echo $counter; ?>" type="radio" value="3" name="3_library-ans<?php echo $counter; ?>"></td>
		<td><input class="3_library-ans<?php echo $counter; ?>" type="radio" value="2" name="3_library-ans<?php echo $counter; ?>"></td>
		<td><input class="3_library-ans<?php echo $counter; ?>" type="radio" value="1" name="3_library-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= NSTP ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='nstp'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Guidance Counseling</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="nst-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_nstp-ans<?php echo $counter; ?>" type="radio" value="5" name="1_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="1_nstp-ans<?php echo $counter; ?>" type="radio" value="4" name="1_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="1_nstp-ans<?php echo $counter; ?>" type="radio" value="3" name="1_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="1_nstp-ans<?php echo $counter; ?>" type="radio" value="2" name="1_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="1_nstp-ans<?php echo $counter; ?>" type="radio" value="1" name="1_nstp-ans<?php echo $counter; ?>"></td>

		<td><input class="2_nstp-ans<?php echo $counter; ?>" type="radio" value="5" name="2_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="2_nstp-ans<?php echo $counter; ?>" type="radio" value="4" name="2_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="2_nstp-ans<?php echo $counter; ?>" type="radio" value="3" name="2_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="2_nstp-ans<?php echo $counter; ?>" type="radio" value="2" name="2_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="2_nstp-ans<?php echo $counter; ?>" type="radio" value="1" name="2_nstp-ans<?php echo $counter; ?>"></td>

		<td><input class="3_nstp-ans<?php echo $counter; ?>" type="radio" value="5" name="3_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="3_nstp-ans<?php echo $counter; ?>" type="radio" value="4" name="3_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="3_nstp-ans<?php echo $counter; ?>" type="radio" value="3" name="3_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="3_nstp-ans<?php echo $counter; ?>" type="radio" value="2" name="3_nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="3_nstp-ans<?php echo $counter; ?>" type="radio" value="1" name="3_nstp-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Physical Plant ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='physical'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Physical Plant</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="phy-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_physical-ans<?php echo $counter; ?>" type="radio" value="5" name="1_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="1_physical-ans<?php echo $counter; ?>" type="radio" value="4" name="1_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="1_physical-ans<?php echo $counter; ?>" type="radio" value="3" name="1_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="1_physical-ans<?php echo $counter; ?>" type="radio" value="2" name="1_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="1_physical-ans<?php echo $counter; ?>" type="radio" value="1" name="1_physical-ans<?php echo $counter; ?>"></td>

		<td><input class="2_physical-ans<?php echo $counter; ?>" type="radio" value="5" name="2_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="2_physical-ans<?php echo $counter; ?>" type="radio" value="4" name="2_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="2_physical-ans<?php echo $counter; ?>" type="radio" value="3" name="2_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="2_physical-ans<?php echo $counter; ?>" type="radio" value="2" name="2_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="2_physical-ans<?php echo $counter; ?>" type="radio" value="1" name="2_physical-ans<?php echo $counter; ?>"></td>

		<td><input class="3_physical-ans<?php echo $counter; ?>" type="radio" value="5" name="3_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="3_physical-ans<?php echo $counter; ?>" type="radio" value="4" name="3_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="3_physical-ans<?php echo $counter; ?>" type="radio" value="3" name="3_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="3_physical-ans<?php echo $counter; ?>" type="radio" value="2" name="3_physical-ans<?php echo $counter; ?>"></td>
		<td><input class="3_physical-ans<?php echo $counter; ?>" type="radio" value="1" name="3_physical-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Research & Development ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='research'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Research & Development</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="res-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_research-ans<?php echo $counter; ?>" type="radio" value="5" name="1_research-ans<?php echo $counter; ?>"></td>
		<td><input class="1_research-ans<?php echo $counter; ?>" type="radio" value="4" name="1_research-ans<?php echo $counter; ?>"></td>
		<td><input class="1_research-ans<?php echo $counter; ?>" type="radio" value="3" name="1_research-ans<?php echo $counter; ?>"></td>
		<td><input class="1_research-ans<?php echo $counter; ?>" type="radio" value="2" name="1_research-ans<?php echo $counter; ?>"></td>
		<td><input class="1_research-ans<?php echo $counter; ?>" type="radio" value="1" name="1_research-ans<?php echo $counter; ?>"></td>

		<td><input class="2_research-ans<?php echo $counter; ?>" type="radio" value="5" name="2_research-ans<?php echo $counter; ?>"></td>
		<td><input class="2_research-ans<?php echo $counter; ?>" type="radio" value="4" name="2_research-ans<?php echo $counter; ?>"></td>
		<td><input class="2_research-ans<?php echo $counter; ?>" type="radio" value="3" name="2_research-ans<?php echo $counter; ?>"></td>
		<td><input class="2_research-ans<?php echo $counter; ?>" type="radio" value="2" name="2_research-ans<?php echo $counter; ?>"></td>
		<td><input class="2_research-ans<?php echo $counter; ?>" type="radio" value="1" name="2_research-ans<?php echo $counter; ?>"></td>

		<td><input class="3_research-ans<?php echo $counter; ?>" type="radio" value="5" name="3_research-ans<?php echo $counter; ?>"></td>
		<td><input class="3_research-ans<?php echo $counter; ?>" type="radio" value="4" name="3_research-ans<?php echo $counter; ?>"></td>
		<td><input class="3_research-ans<?php echo $counter; ?>" type="radio" value="3" name="3_research-ans<?php echo $counter; ?>"></td>
		<td><input class="3_research-ans<?php echo $counter; ?>" type="radio" value="2" name="3_research-ans<?php echo $counter; ?>"></td>
		<td><input class="3_research-ans<?php echo $counter; ?>" type="radio" value="1" name="3_research-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= XScholarship ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='scholarship'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Scholarship</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="sch-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_scholarship-ans<?php echo $counter; ?>" type="radio" value="5" name="1_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_scholarship-ans<?php echo $counter; ?>" type="radio" value="4" name="1_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_scholarship-ans<?php echo $counter; ?>" type="radio" value="3" name="1_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_scholarship-ans<?php echo $counter; ?>" type="radio" value="2" name="1_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="1_scholarship-ans<?php echo $counter; ?>" type="radio" value="1" name="1_scholarship-ans<?php echo $counter; ?>"></td>

		<td><input class="2_scholarship-ans<?php echo $counter; ?>" type="radio" value="5" name="2_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_scholarship-ans<?php echo $counter; ?>" type="radio" value="4" name="2_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_scholarship-ans<?php echo $counter; ?>" type="radio" value="3" name="2_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_scholarship-ans<?php echo $counter; ?>" type="radio" value="2" name="2_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="2_scholarship-ans<?php echo $counter; ?>" type="radio" value="1" name="2_scholarship-ans<?php echo $counter; ?>"></td>

		<td><input class="3_scholarship-ans<?php echo $counter; ?>" type="radio" value="5" name="3_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_scholarship-ans<?php echo $counter; ?>" type="radio" value="4" name="3_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_scholarship-ans<?php echo $counter; ?>" type="radio" value="3" name="3_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_scholarship-ans<?php echo $counter; ?>" type="radio" value="2" name="3_scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="3_scholarship-ans<?php echo $counter; ?>" type="radio" value="1" name="3_scholarship-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= Student ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='student'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
?>
	<h4><b>Student Affairs (OSAS)</b></h4>
	<table class="table table-bordered tbl-style">
	<tr>
		<th colspan="1"></th>
		<th colspan="5" style="text-align:center;">Promptness of Services</th>
    	<th colspan="5" style="text-align:center;">Courtesy of the Provider</th>
    	<th colspan="5" style="text-align:center;">Quality of the Services</th>
	</tr>
	<tr>
		<th></th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
		<th>5</th>
		<th>4</th>
		<th>3</th>
		<th>2</th>
		<th>1</th>
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
		<td class="stu-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="1_student-ans<?php echo $counter; ?>" type="radio" value="5" name="1_student-ans<?php echo $counter; ?>"></td>
		<td><input class="1_student-ans<?php echo $counter; ?>" type="radio" value="4" name="1_student-ans<?php echo $counter; ?>"></td>
		<td><input class="1_student-ans<?php echo $counter; ?>" type="radio" value="3" name="1_student-ans<?php echo $counter; ?>"></td>
		<td><input class="1_student-ans<?php echo $counter; ?>" type="radio" value="2" name="1_student-ans<?php echo $counter; ?>"></td>
		<td><input class="1_student-ans<?php echo $counter; ?>" type="radio" value="1" name="1_student-ans<?php echo $counter; ?>"></td>

		<td><input class="2_student-ans<?php echo $counter; ?>" type="radio" value="5" name="2_student-ans<?php echo $counter; ?>"></td>
		<td><input class="2_student-ans<?php echo $counter; ?>" type="radio" value="4" name="2_student-ans<?php echo $counter; ?>"></td>
		<td><input class="2_student-ans<?php echo $counter; ?>" type="radio" value="3" name="2_student-ans<?php echo $counter; ?>"></td>
		<td><input class="2_student-ans<?php echo $counter; ?>" type="radio" value="2" name="2_student-ans<?php echo $counter; ?>"></td>
		<td><input class="2_student-ans<?php echo $counter; ?>" type="radio" value="1" name="2_student-ans<?php echo $counter; ?>"></td>

		<td><input class="3_student-ans<?php echo $counter; ?>" type="radio" value="5" name="3_student-ans<?php echo $counter; ?>"></td>
		<td><input class="3_student-ans<?php echo $counter; ?>" type="radio" value="4" name="3_student-ans<?php echo $counter; ?>"></td>
		<td><input class="3_student-ans<?php echo $counter; ?>" type="radio" value="3" name="3_student-ans<?php echo $counter; ?>"></td>
		<td><input class="3_student-ans<?php echo $counter; ?>" type="radio" value="2" name="3_student-ans<?php echo $counter; ?>"></td>
		<td><input class="3_student-ans<?php echo $counter; ?>" type="radio" value="1" name="3_student-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
<?php } ?>