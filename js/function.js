$(document).ready(function(){
	$('#login_error').hide();
	//==== login request
	$('#btn_login').on('click',function(e){
		e.preventDefault();

		$.post('php_func/login.php',
		{
			username: $('#txt_username').val(),
			password: $('#txt_password').val()
		},
		function(success){
			if(success=="admin"){
				location.href="admin-page/dashboard.php";
			} else {
				$('#login_error').show();
				$('#error_message').text('Invalid Username/password');
				setTimeout(function(){ $('#login_error').hide(); }, 3000);
			}
		})
	})

	//============= create user =======================
	$('#error_holder').hide();
	$('#success_holder').hide();

	$('#btn_register').on('click',function(e){
		e.preventDefault();
		if($('#txt_fname').val() && $('#txt_mname').val() && $('#txt_lname').val() && $('#txt_office').val() && $('#txt_position').val() && $('#txt_idnum').val() && $('#txt_username').val() && $('#txt_password').val() && $('#txt_confirm_password').val() && $('#txt_type').val()){
			$.post('../php_func/register.php',
			{
				fname: $('#txt_fname').val(),
				mname: $('#txt_mname').val(),
				lname: $('#txt_lname').val(),
				office: $('#txt_office').val(),
				position: $('#txt_position').val(),
				id_num: $('#txt_idnum').val(),
				username: $('#txt_username').val(),
				password: $('#txt_password').val(),
				c_password: $('#txt_confirm_password').val(),
				user_type: $('#txt_type').val()
			},
			function(data){
				if(data=="success"){
					$('#success_holder').show();
					$('#success_message').text("Successfully created a user!");
					setTimeout(function(){ $('#success_holder').hide(); }, 3000);
				} else {
					$('#error_holder').show();
					$('#error_message').text(data);
					setTimeout(function(){ $('#error_holder').hide(); }, 3000);
					$('input').val('');
				}
			})
		} else {

		}
		
	});

	//============== update question ==================
	$('#btn_update_question').on('click',function(e){
		var txt_question = $('#txt_question').val();
		var dataid = $('#txt_question').data("id");
		var service_type = $('#txt_question').data("type");

		if(txt_question){
			$.post('../php_func/update_question.php',
			{
				id: dataid,
				question: txt_question	
			},
			function(data){
				if(data=="success"){
					location.href = "service-"+service_type+".php";
				} else {
					alert(data);
				}
			})
		}
	});

	$('#btn_cancel_question').on('click',function(e){
		var service_type = $('#txt_question').data("type");
		location.href = "service-"+service_type+".php";
	})

	$('.del-question').on('click',function(e){
		var service_type = $('.del-question').data("type");
		var dataid = $('.del-question').data("id");

		$.post('../php_func/delete_question.php',
		{
			id: dataid
		},
		function(data){
			if(data=="success"){
				location.reload();
			}
		});
	})

	$('#btn_add_question').on('click',function(e){
		e.preventDefault();
		var service_type = $('#txt_question').data('type');

		$.post('../php_func/add_question.php',
		{
			question: $('#txt_question').val(),
			type: service_type
		},
		function(data){
			if(data=="success"){
				location.href="service-"+service_type+".php";
			} else {
				alert(data);
			}
		})
	})

});