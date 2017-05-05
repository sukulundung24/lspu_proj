<!-- ============= General ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='general'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
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
		<td class="gen-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="5" name="general-ans<?php echo $counter; ?>"></td>
		<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="4" name="general-ans<?php echo $counter; ?>"></td>
		<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="3" name="general-ans<?php echo $counter; ?>"></td>
		<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="2" name="general-ans<?php echo $counter; ?>"></td>
		<td><input class="general-ans<?php echo $counter; ?>" type="radio" value="1" name="general-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
	<br>
<?php } ?>



<!-- ============= registrarship ================= -->
<?php
	$query = "Select * from tbl_question where service_type ='registrarship'";

	$resp = @mysqli_query($dbc, $query);
	if($resp->num_rows >0){
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
		<td class="reg-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="5" name="registrarship-ans<?php echo $counter; ?>"></td>
		<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="4" name="ans<?php echo $counter; ?>"></td>
		<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="3" name="ans<?php echo $counter; ?>"></td>
		<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="2" name="ans<?php echo $counter; ?>"></td>
		<td><input class="registrarship-ans<?php echo $counter; ?>" type="radio" value="1" name="ans<?php echo $counter; ?>"></td>
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
		<td class="alu-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="alumni-ans<?php echo $counter; ?>" type="radio" value="5" name="alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="alumni-ans<?php echo $counter; ?>" type="radio" value="4" name="alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="alumni-ans<?php echo $counter; ?>" type="radio" value="3" name="alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="alumni-ans<?php echo $counter; ?>" type="radio" value="2" name="alumni-ans<?php echo $counter; ?>"></td>
		<td><input class="alumni-ans<?php echo $counter; ?>" type="radio" value="1" name="alumni-ans<?php echo $counter; ?>"></td>
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
		<td class="adm-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="administration-ans<?php echo $counter; ?>" type="radio" value="5" name="administration-ans<?php echo $counter; ?>"></td>
		<td><input class="administration-ans<?php echo $counter; ?>" type="radio" value="4" name="administration-ans<?php echo $counter; ?>"></td>
		<td><input class="administration-ans<?php echo $counter; ?>" type="radio" value="3" name="administration-ans<?php echo $counter; ?>"></td>
		<td><input class="administration-ans<?php echo $counter; ?>" type="radio" value="2" name="administration-ans<?php echo $counter; ?>"></td>
		<td><input class="administration-ans<?php echo $counter; ?>" type="radio" value="1" name="administration-ans<?php echo $counter; ?>"></td>
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
		<td class="acc-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="accounting-ans<?php echo $counter; ?>" type="radio" value="5" name="accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="accounting-ans<?php echo $counter; ?>" type="radio" value="4" name="accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="accounting-ans<?php echo $counter; ?>" type="radio" value="3" name="accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="accounting-ans<?php echo $counter; ?>" type="radio" value="2" name="accounting-ans<?php echo $counter; ?>"></td>
		<td><input class="accounting-ans<?php echo $counter; ?>" type="radio" value="1" name="accounting-ans<?php echo $counter; ?>"></td>
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
		<td class="bus-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="business-ans<?php echo $counter; ?>" type="radio" value="5" name="business-ans<?php echo $counter; ?>"></td>
		<td><input class="business-ans<?php echo $counter; ?>" type="radio" value="4" name="business-ans<?php echo $counter; ?>"></td>
		<td><input class="business-ans<?php echo $counter; ?>" type="radio" value="3" name="business-ans<?php echo $counter; ?>"></td>
		<td><input class="business-ans<?php echo $counter; ?>" type="radio" value="2" name="business-ans<?php echo $counter; ?>"></td>
		<td><input class="business-ans<?php echo $counter; ?>" type="radio" value="1" name="business-ans<?php echo $counter; ?>"></td>
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
		<td class="cas-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="cashier-ans<?php echo $counter; ?>" type="radio" value="5" name="cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="cashier-ans<?php echo $counter; ?>" type="radio" value="4" name="cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="cashier-ans<?php echo $counter; ?>" type="radio" value="3" name="cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="cashier-ans<?php echo $counter; ?>" type="radio" value="2" name="cashier-ans<?php echo $counter; ?>"></td>
		<td><input class="cashier-ans<?php echo $counter; ?>" type="radio" value="1" name="cashier-ans<?php echo $counter; ?>"></td>
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
		<td class="cli-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="clinic-ans<?php echo $counter; ?>" type="radio" value="5" name="ans<?php echo $counter; ?>"></td>
		<td><input class="clinic-ans<?php echo $counter; ?>" type="radio" value="4" name="ans<?php echo $counter; ?>"></td>
		<td><input class="clinic-ans<?php echo $counter; ?>" type="radio" value="3" name="ans<?php echo $counter; ?>"></td>
		<td><input class="clinic-ans<?php echo $counter; ?>" type="radio" value="2" name="ans<?php echo $counter; ?>"></td>
		<td><input class="clinic-ans<?php echo $counter; ?>" type="radio" value="1" name="ans<?php echo $counter; ?>"></td>
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
		<td class="ext-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="extension-ans<?php echo $counter; ?>" type="radio" value="5" name="extension-ans<?php echo $counter; ?>"></td>
		<td><input class="extension-ans<?php echo $counter; ?>" type="radio" value="4" name="extension-ans<?php echo $counter; ?>"></td>
		<td><input class="extension-ans<?php echo $counter; ?>" type="radio" value="3" name="extension-ans<?php echo $counter; ?>"></td>
		<td><input class="extension-ans<?php echo $counter; ?>" type="radio" value="2" name="extension-ans<?php echo $counter; ?>"></td>
		<td><input class="extension-ans<?php echo $counter; ?>" type="radio" value="1" name="extension-ans<?php echo $counter; ?>"></td>
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
		<td class="gend-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="gender-ans<?php echo $counter; ?>" type="radio" value="5" name="gender-ans<?php echo $counter; ?>"></td>
		<td><input class="gender-ans<?php echo $counter; ?>" type="radio" value="4" name="gender-ans<?php echo $counter; ?>"></td>
		<td><input class="gender-ans<?php echo $counter; ?>" type="radio" value="3" name="gender-ans<?php echo $counter; ?>"></td>
		<td><input class="gender-ans<?php echo $counter; ?>" type="radio" value="2" name="gender-ans<?php echo $counter; ?>"></td>
		<td><input class="gender-ans<?php echo $counter; ?>" type="radio" value="1" name="gender-ans<?php echo $counter; ?>"></td>
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
		<td class="gui-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="guidance-ans<?php echo $counter; ?>" type="radio" value="5" name="guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="guidance-ans<?php echo $counter; ?>" type="radio" value="4" name="guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="guidance-ans<?php echo $counter; ?>" type="radio" value="3" name="guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="guidance-ans<?php echo $counter; ?>" type="radio" value="2" name="guidance-ans<?php echo $counter; ?>"></td>
		<td><input class="guidance-ans<?php echo $counter; ?>" type="radio" value="1" name="guidance-ans<?php echo $counter; ?>"></td>
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
		<td class="ict-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="icts-ans<?php echo $counter; ?>" type="radio" value="5" name="icts-ans<?php echo $counter; ?>"></td>
		<td><input class="icts-ans<?php echo $counter; ?>" type="radio" value="4" name="icts-ans<?php echo $counter; ?>"></td>
		<td><input class="icts-ans<?php echo $counter; ?>" type="radio" value="3" name="icts-ans<?php echo $counter; ?>"></td>
		<td><input class="icts-ans<?php echo $counter; ?>" type="radio" value="2" name="icts-ans<?php echo $counter; ?>"></td>
		<td><input class="icts-ans<?php echo $counter; ?>" type="radio" value="1" name="icts-ans<?php echo $counter; ?>"></td>
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
		<td class="lib-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="library-ans<?php echo $counter; ?>" type="radio" value="5" name="library-ans<?php echo $counter; ?>"></td>
		<td><input class="library-ans<?php echo $counter; ?>" type="radio" value="4" name="library-ans<?php echo $counter; ?>"></td>
		<td><input class="library-ans<?php echo $counter; ?>" type="radio" value="3" name="library-ans<?php echo $counter; ?>"></td>
		<td><input class="library-ans<?php echo $counter; ?>" type="radio" value="2" name="library-ans<?php echo $counter; ?>"></td>
		<td><input class="library-ans<?php echo $counter; ?>" type="radio" value="1" name="library-ans<?php echo $counter; ?>"></td>
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
		<td class="nst-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="nstp-ans<?php echo $counter; ?>" type="radio" value="5" name="nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="nstp-ans<?php echo $counter; ?>" type="radio" value="4" name="nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="nstp-ans<?php echo $counter; ?>" type="radio" value="3" name="nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="nstp-ans<?php echo $counter; ?>" type="radio" value="2" name="nstp-ans<?php echo $counter; ?>"></td>
		<td><input class="nstp-ans<?php echo $counter; ?>" type="radio" value="1" name="nstp-ans<?php echo $counter; ?>"></td>
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
		<td class="phy-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="physical-ans<?php echo $counter; ?>" type="radio" value="5" name="physica-ans<?php echo $counter; ?>"></td>
		<td><input class="physical-ans<?php echo $counter; ?>" type="radio" value="4" name="physica-ans<?php echo $counter; ?>"></td>
		<td><input class="physical-ans<?php echo $counter; ?>" type="radio" value="3" name="physica-ans<?php echo $counter; ?>"></td>
		<td><input class="physical-ans<?php echo $counter; ?>" type="radio" value="2" name="physica-ans<?php echo $counter; ?>"></td>
		<td><input class="physical-ans<?php echo $counter; ?>" type="radio" value="1" name="physica-ans<?php echo $counter; ?>"></td>
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
		<td class="res-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="research-ans<?php echo $counter; ?>" type="radio" value="5" name="research-ans<?php echo $counter; ?>"></td>
		<td><input class="research-ans<?php echo $counter; ?>" type="radio" value="4" name="research-ans<?php echo $counter; ?>"></td>
		<td><input class="research-ans<?php echo $counter; ?>" type="radio" value="3" name="research-ans<?php echo $counter; ?>"></td>
		<td><input class="research-ans<?php echo $counter; ?>" type="radio" value="2" name="research-ans<?php echo $counter; ?>"></td>
		<td><input class="research-ans<?php echo $counter; ?>" type="radio" value="1" name="research-ans<?php echo $counter; ?>"></td>
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
		<td class="sch-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="scholarship-ans<?php echo $counter; ?>" type="radio" value="5" name="scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="scholarship-ans<?php echo $counter; ?>" type="radio" value="4" name="scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="scholarship-ans<?php echo $counter; ?>" type="radio" value="3" name="scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="scholarship-ans<?php echo $counter; ?>" type="radio" value="2" name="scholarship-ans<?php echo $counter; ?>"></td>
		<td><input class="scholarship-ans<?php echo $counter; ?>" type="radio" value="1" name="scholarship-ans<?php echo $counter; ?>"></td>
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
		<td class="stu-input" data-id="<?php echo $row['id'] ?>"><?php echo $row['question'] ?></td>
		<td><input class="student-ans<?php echo $counter; ?>" type="radio" value="5" name="student-ans<?php echo $counter; ?>"></td>
		<td><input class="student-ans<?php echo $counter; ?>" type="radio" value="4" name="student-ans<?php echo $counter; ?>"></td>
		<td><input class="student-ans<?php echo $counter; ?>" type="radio" value="3" name="student-ans<?php echo $counter; ?>"></td>
		<td><input class="student-ans<?php echo $counter; ?>" type="radio" value="2" name="student-ans<?php echo $counter; ?>"></td>
		<td><input class="student-ans<?php echo $counter; ?>" type="radio" value="1" name="student-ans<?php echo $counter; ?>"></td>
	</tr>
<?php $counter++; } ?>
	</table>
<?php } ?>