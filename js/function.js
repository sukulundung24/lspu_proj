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
				$('#error_message').text('Invalid Username/password or you are not yet registered.');
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
		e.preventDefault();
		var service_type = $('.del-question').data("type");
		var dataid = $(this).data("id");
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
		// $('.gen-input').each(function(i){
		// 	var name = '.general-ans'+(i+1);
		// 	var data_answer = $(name+':checked').val()
		// 	if(data_answer){
		// 		data.push({	
		// 			answer:data_answer,
		// 			quest_id: $(this).data("id")
		// 		})
		// 	}
			
		// })

		//================ registrarship ==============
		$('.reg-input').each(function(i){
			var name1 = '.1_registrarship-ans'+(i+1);
			var name2 = '.2_registrarship-ans'+(i+1);
			var name3 = '.3_registrarship-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			console.log($(this).data("id"));
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//=============== alumni ==============
		$('.alu-input').each(function(i){
			var name1 = '.1_alumni-ans'+(i+1);
			var name2 = '.2_alumni-ans'+(i+1);
			var name3 = '.3_alumni-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val()
			var data_answer3 = $(name3+':checked').val()
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== administration ==========
		$('.adm-input').each(function(i){
			var name1 = '.1_administration-ans'+(i+1);
			var name2 = '.2_administration-ans'+(i+1);
			var name3 = '.3_administration-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Accounting =================
		$('.acc-input').each(function(i){
			var name1 = '.1_accounting-ans'+(i+1);
			var name2 = '.2_accounting-ans'+(i+1);
			var name3 = '.3_accounting-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Business =================
		$('.bus-input').each(function(i){
			var name1 = '.1_business-ans'+(i+1);
			var name2 = '.2_business-ans'+(i+1);
			var name3 = '.3_business-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//========== Cashier ===========
		$('.cas-input').each(function(i){
			var name1 = '.1_cashier-ans'+(i+1);
			var name2 = '.2_cashier-ans'+(i+1);
			var name3 = '.3_cashier-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//=========== clinic =============
		$('.cli-input').each(function(i){
			var name1 = '.1_clinic-ans'+(i+1);
			var name2 = '.2_clinic-ans'+(i+1);
			var name3 = '.3_clinic-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Extension =================
		$('.ext-input').each(function(i){
			var name1 = '.1_extension-ans'+(i+1);
			var name2 = '.2_extension-ans'+(i+1);
			var name3 = '.3_extension-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//=============== gender ==============
		$('.gend-input').each(function(i){
			var name1 = '.1_gender-ans'+(i+1);
			var name2 = '.2_gender-ans'+(i+1);
			var name3 = '.3_gender-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Guidance ============ 
		$('.gui-input').each(function(i){
			var name1 = '.1_guidance-ans'+(i+1);
			var name2 = '.2_guidance-ans'+(i+1);
			var name3 = '.3_guidance-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		// ================  ICTS  ===================
		$('.ict-input').each(function(i){
			var name1 = '.1_icts-ans'+(i+1);
			var name2 = '.2_icts-ans'+(i+1);
			var name3 = '.3_icts-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Library ==============
		$('.lib-input').each(function(i){
			var name1 = '.1_library-ans'+(i+1);
			var name2 = '.2_library-ans'+(i+1);
			var name3 = '.3_library-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============ NSTP =============
		$('.nst-input').each(function(i){
			var name1 = '.1_nstp-ans'+(i+1);
			var name2 = '.2_nstp-ans'+(i+1);
			var name3 = '.3_nstp-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= Physical ===============
		$('.phy-input').each(function(i){
			var name1 = '.1_physical-ans'+(i+1);
			var name2 = '.2_physical-ans'+(i+1);
			var name3 = '.3_physical-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============= research ==============
		$('.res-input').each(function(i){
			var name1 = '.1_research-ans'+(i+1);
			var name2 = '.2_research-ans'+(i+1);
			var name3 = '.3_research-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Scholarship ===========
		$('.sch-input').each(function(i){
			var name1 = '.1_scholarship-ans'+(i+1);
			var name2 = '.2_scholarship-ans'+(i+1);
			var name3 = '.3_scholarship-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		//============== Student ==========
		$('.stu-input').each(function(i){
			var name1 = '.1_student-ans'+(i+1);
			var name2 = '.2_student-ans'+(i+1);
			var name3 = '.3_student-ans'+(i+1);
			var data_answer1 = $(name1+':checked').val();
			var data_answer2 = $(name2+':checked').val();
			var data_answer3 = $(name3+':checked').val();
			if(data_answer1 && data_answer2 && data_answer3){
				data.push({	
					answer1:data_answer1,
					answer2:data_answer2,
					answer3:data_answer3,
					quest_id: $(this).data("id")
				})
			}
		})

		$.post('../php_func/save_answer.php',
		{
			data: data,
		},
		function(data){
			if(data=="success"){
				alert("You have successfully filled out the survey!");
				location.href = "dashboard.php";
			} else {
				alert("There's something wrong!");
			}
		})

	})
	
	$('.main-services').hide();
	$('#back-survey').hide();
	$('#submit-survey').hide();

	$('#next-survey').on('click',function(e){
		$('.main-services').show();
		$('#back-survey').show();
		$('#submit-survey').show();

		$('.general-service').hide();
		$(this).hide();
	})

	$('#back-survey').on('click',function(e){
		$(this).hide();
		$('.main-services').hide();
		$('#submit-survey').hide();

		$('.general-service').show();
		$('#next-survey').show();

	})

	$('#btn_save_sem_sched').on('click',function(e){
		e.preventDefault();
		$.post('../php_func/save_sched.php',
		{
			date1: $('#txt_first_date').val(),
			month1: $('#txt_first_month').val(),
			date2: $('#txt_second_date').val(),
			month2: $('#txt_second_month').val()
		},function(data){
			console.log(data);
		})
	})

});