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



//=========================== general registrarship ===================================================
		var general_data = [];
		$('.reg-general').each(function(i){
			var ans1 = $('.1_registrar_input:checked').val();
			var ans2 = $('.2_registrar_input:checked').val();
			var remark = $('.registrar_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'registrarship'
				})
			}
		})

		$('.OSAS-general').each(function(i){
			var ans1 = $('.1_student_input:checked').val();
			var ans2 = $('.2_student_input:checked').val();
			var remark = $('.student_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'osas'
				})
			}
		})

		$('.guidance-general').each(function(i){
			var ans1 = $('.1_guidance_input:checked').val();
			var ans2 = $('.2_guidance_input:checked').val();
			var remark = $('.guidance_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'guidance'
				})
			}
		})

		$('.admission-general').each(function(i){
			var ans1 = $('.1_admission_input:checked').val();
			var ans2 = $('.2_admission_input:checked').val();
			var remark = $('.admission_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'admission'
				})
			}
		})

		$('.counseling-general').each(function(i){
			var ans1 = $('.1_counseling_input:checked').val();
			var ans2 = $('.2_counseling_input:checked').val();
			var remark = $('.counseling_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'counseling'
				})
			}
		})

		$('.testing-general').each(function(i){
			var ans1 = $('.1_testing_input:checked').val();
			var ans2 = $('.2_testing_input:checked').val();
			var remark = $('.testing_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'testing'
				})
			}
		})

		$('.medical-general').each(function(i){
			var ans1 = $('.1_medical_input:checked').val();
			var ans2 = $('.2_medical_input:checked').val();
			var remark = $('.medical_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'medical'
				})
			}
		})

		$('.dental-general').each(function(i){
			var ans1 = $('.1_dental_input:checked').val();
			var ans2 = $('.2_dental_input:checked').val();
			var remark = $('.dental_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'dental'
				})
			}
		})

		$('.campus-general').each(function(i){
			var ans1 = $('.1_campus_input:checked').val();
			var ans2 = $('.2_campus_input:checked').val();
			var remark = $('.campus_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'campus'
				})
			}
		})

		$('.canteen-general').each(function(i){
			var ans1 = $('.1_canteen_input:checked').val();
			var ans2 = $('.2_canteen_input:checked').val();
			var remark = $('.canteen_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'canteen'
				})
			}
		})

		$('.scholarship-general').each(function(i){
			var ans1 = $('.1_scholarship_input:checked').val();
			var ans2 = $('.2_scholarship_input:checked').val();
			var remark = $('.scholarship_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'scholarship'
				})
			}
		})

		$('.GAD-general').each(function(i){
			var ans1 = $('.1_gender_input:checked').val();
			var ans2 = $('.2_gender_input:checked').val();
			var remark = $('.gender_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'gad'
				})
			}
		})

		$('.library-general').each(function(i){
			var ans1 = $('.1_library_input:checked').val();
			var ans2 = $('.2_library_input:checked').val();
			var remark = $('.library_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'library'
				})
			}
		})

		$('.research-general').each(function(i){
			var ans1 = $('.1_research_input:checked').val();
			var ans2 = $('.2_research_input:checked').val();
			var remark = $('.research_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'research'
				})
			}
		})

		$('.cashier-general').each(function(i){
			var ans1 = $('.1_cashier_input:checked').val();
			var ans2 = $('.2_cashier_input:checked').val();
			var remark = $('.cashier_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'cashier'
				})
			}
		})

		$('.budget-general').each(function(i){
			var ans1 = $('.1_budget_input:checked').val();
			var ans2 = $('.2_budget_input:checked').val();
			var remark = $('.budget_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'budget'
				})
			}
		})

		$('.security-general').each(function(i){
			var ans1 = $('.1_security_input:checked').val();
			var ans2 = $('.2_security_input:checked').val();
			var remark = $('.security_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'security'
				})
			}
		})

		$('.infastructure-general').each(function(i){
			var ans1 = $('.1_utilities_input:checked').val();
			var ans2 = $('.2_utilities_input:checked').val();
			var remark = $('.utilities_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'infastructure'
				})
			}
		})

		$('.classroom-general').each(function(i){
			var ans1 = $('.1_classroom_input:checked').val();
			var ans2 = $('.2_classroom_input:checked').val();
			var remark = $('.classroom_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'classroom'
				})
			}
		})

		$('.comfort-general').each(function(i){
			var ans1 = $('.1_cr_input:checked').val();
			var ans2 = $('.2_cr_input:checked').val();
			var remark = $('.cr_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'cr'
				})
			}
		})

		$('.science-general').each(function(i){
			var ans1 = $('.1_science_input:checked').val();
			var ans2 = $('.2_science_input:checked').val();
			var remark = $('.science_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'science'
				})
			}
		})

		$('.computer-general').each(function(i){
			var ans1 = $('.1_computer_input:checked').val();
			var ans2 = $('.2_computer_input:checked').val();
			var remark = $('.computer_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'computer'
				})
			}
		})

		$('.BAO-general').each(function(i){
			var ans1 = $('.1_business_input:checked').val();
			var ans2 = $('.2_business_input:checked').val();
			var remark = $('.business_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'bao'
				})
			}
		})

		$('.internet-general').each(function(i){
			var ans1 = $('.1_internet_input:checked').val();
			var ans2 = $('.2_internet_input:checked').val();
			var remark = $('.internet_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'internet'
				})
			}
		})

		$('.seminar-general').each(function(i){
			var ans1 = $('.1_seminar_input:checked').val();
			var ans2 = $('.2_seminar_input:checked').val();
			var remark = $('.seminar_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'seminar'
				})
			}
		})

		$('.sports-general').each(function(i){
			var ans1 = $('.1_sports_input:checked').val();
			var ans2 = $('.2_sports_input:checked').val();
			var remark = $('.sports_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'sport'
				})
			}
		})

		$('.lounge-general').each(function(i){
			var ans1 = $('.1_lounge_input:checked').val();
			var ans2 = $('.2_lounge_input:checked').val();
			var remark = $('.lounge_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'lounge'
				})
			}
		})

		$('.college-general').each(function(i){
			var ans1 = $('.1_college_input:checked').val();
			var ans2 = $('.2_college_input:checked').val();
			var remark = $('.college_remark').val();

			if(ans1 && ans2 && remark){
				general_data.push({
					answer1: ans1,
					answer2: ans2,
					remark: remark,
					description: 'college'
				})
			}
		})

		$.post('../php_func/save_answer.php',
		{
			data: data
		},
		function(data){
			if(data=="success"){
				$.post('../php_func/save_answer_general.php',{
					general_data:general_data
				},function(datas){
					if(datas=="success"){
						alert("You have successfully filled out the survey!");
						location.href = "dashboard.php";
					} else {
						alert('Something went wrong');
					}
				})
				
			} else {
				alert("There's something wrong!");
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