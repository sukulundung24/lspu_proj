$(document).ready(function(){

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
				location.href="index.php";
			}
		})
	})

});