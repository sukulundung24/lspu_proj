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
			} else if(success=="student"){
				location.href="student-page/dashboard.php";
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

// =================== submit survey =====================
	$('#submit-survey').click(function(e){
		e.preventDefault();
		var cur = $(this);
		var data = [];

		//================ general ====================
		$('.gen-input').each(function(i){
			var name = '.general-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
			
		})

		//================ registrarship ==============
		$('.reg-input').each(function(i){
			var name = '.registrarship-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//=============== alumni ==============
		$('.alu-input').each(function(i){
			var name = '.alumni-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== administration ==========
		$('.adm-input').each(function(i){
			var name = '.administration-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Accounting =================
		$('.acc-input').each(function(i){
			var name = '.accounting-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Business =================
		$('.bus-input').each(function(i){
			var name = '.business-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//========== Cashier ===========
		$('.cas-input').each(function(i){
			var name = '.cashier-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//=========== clinic =============
		$('.cli-input').each(function(i){
			var name = '.clinic-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Extension =================
		$('.ext-input').each(function(i){
			var name = '.extension-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//=============== gender ==============
		$('.gend-input').each(function(i){
			var name = '.gender-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Guidance ============ 
		$('.gui-input').each(function(i){
			var name = '.guidance-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		// ================  ICTS  ===================
		$('.ict-input').each(function(i){
			var name = '.icts-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Library ==============
		$('.lib-input').each(function(i){
			var name = '.library-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============ NSTP =============
		$('.nst-input').each(function(i){
			var name = '.nstp-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Physical ===============
		$('.phy-input').each(function(i){
			var name = '.physical-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= research ==============
		$('.res-input').each(function(i){
			var name = '.research-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Scholarship ===========
		$('.sch-input').each(function(i){
			var name = '.scholarship-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Student ==========
		$('.stu-input').each(function(i){
			var name = '.student-ans'+(i+1);
			var data_answer = $(name+':checked').val()
			if(data_answer){
				data.push({	
					answer:data_answer,
					quest_id: $(this).data("id")
				})
			}
		})

		$.post('../php_func/save_answer.php',
		{
			data: data,
		},
		function(data){
			console.log(data);
		})

	})

});