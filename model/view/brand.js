$(document).ready(function() {

		get_table_data();

		function get_table_data(){

			$.ajax({
				url: "model/controller/getBrands.php",
				type: "POST",
				data: 'getBrands',
				dataType: 'json',
				beforeSend: function(){

				}
			}).done(function(data){
				//
				if(data.count != 0){
					//call manage data function
					manage_data(data.data);
				}else{
					manage_data('NO RECORDED LEAVE FOUND');
				}

			});
		}

		//manage the data
		function manage_data(data){
			var row = '';
			$.each(data, function(key, value){
				row += '<tr>'; 
				row += '<td class="text-center upper">'+ value.brandName +'</td>';
				row += '<td class="text-center upper"><span class="badge bg-green ">'+ value.status +'</span></td>'
				row += '<td class="text-center upper" data-id="'+ value.id +'">';
				row += '<span>' ;
				row += ' <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit_brand"><i class="fa fa-edit"></i></button> '; 
				row += ' <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button> '; 
				row += '</span>' ;
				row += '</td>';
				row += '</tr>'; 
			});

			$("tbody").html(row);
		}


	// moreThan();

	 // var final_total_amt = $('#final_total_amount').val();

	 // var count = 0; //init of counter row table

	 // $('#add_row').on('click', function(){
	 // 	count++; //setting the counter row table to + 1
	 // 	$('#total_item').val(count);//the hidden input field
	 // 	var html_code = '';
	 // 	html_code += '<tr id="row_id_'+count+'">';
	 // 	html_code += '<td><span id="sr_no">'+count+'</span></td>';
	 // 	html_code += '<td><div class="form_group"><select class="form-control input-sm" name="item_name[]" id="item_name'+count+'"><option value="">Samsung S9</option></select></div></td>';
	 // 	html_code += '<td><div class="form-group "><input class="form-control input-sm item_qty" type="number" name="item_qty[]" id="item_qty'+count+'" data-srno="'+count+'"></div>';
	 // 	html_code += '<td><div class="form-group"><input class="form-control input-sm item_price" type="text" name="item_price[]" id="item_price'+count+'" data-srno="'+count+'" ></div></td>';
	 // 	// html_code += '<td><div class="form-group"><input class="form-control input-sm actual_price" type="text" name="actual_price[]" id="actual_price'+count+'" data-srno="'+count+'" ></div></td>';
	 // 	// html_code += '<td><div class="form-group"><input class="form-control input-sm item_discount" type="text" name="item_discount[]" id="item_discount'+count+'" data-srno="'+count+'" ></div></td>';
	 // 	html_code += '<td><div class="form-group"><input class="form-control input-sm order_item_final_amount" type="text" name="order_item_final_amount[]" id="order_item_final_amount'+count+'" value="0" data-srno="'+count+'" readonly></div></td>';
	 // 	html_code += '<td><button type="button" class="remove_row btn btn-danger btn-xs" name="remove_row" id="'+count+'"><i class="fa fa-remove"></i></button></td>';
	 // 	html_code += '<tr>';

	 // 	$('#invoice_item_table').append(html_code); //appending or passing the html_code to the Table body 
	 // });

	 // $(document).on('click','.remove_row', function(){
	 // 	var row_id = $(this).attr("id");// setting the ID to the row_id Variable
	 // 	var actual_amt = $('#order_item_final_amount'+row_id).val();
	 // 	var final_total_price = $('#final_total_amount').val();
	 // 	var result_amount = parseFloat(final_total_price) - parseFloat(actual_amt);
	 // 	$('#final_total_amount').val(result_amount);
	 // 	$('#row_id_'+row_id).remove();
	 // 	count--;
	 // 	$('#total_item').val(count);//passing total serial no to the hidden input field
	 // });

	 // function calculation(count)
	 // {
	 // 	var final_amount = 0
	 // 	for(j=1; j<=count; j++)
	 // 	{
	 // 		var quantity = 0;
	 // 		var price = 0;
	 // 		var actual_amount = 0;
	 // 		// var item_discount = 0;
	 // 		var discount_amt = 0;
	 // 		var item_total = 0;

	 // 		quantity = $('#item_qty'+j).val();
	 // 		if(quantity > 0)
	 // 		{
	 // 			price = $('#item_price'+j).val();
	 // 			if(price > 0)
	 // 			{
	 // 				actual_amount = parseFloat(quantity) * parseFloat(price);
	 // 				// $('#actual_price'+j).val(actual_amount);
	 // 				$('#order_item_final_amount'+j).val(actual_amount);
	 // 				// item_discount = $('#item_discount'+j).val();
	 // 				// if(item_discount == '')
	 // 				// {
	 // 				// 	discount_amt = parseFloat(actual_amount)*1;
	 // 				// }else{
	 // 				// 	discount_amt = (parseFloat(actual_amount)*parserFloat(item_discount))/100;
	 // 				// }
	 // 			}
 	// 			item_total = parseFloat(actual_amount);
 	// 			final_amount=parseFloat(final_amount)+parseFloat(item_total);
 	// 			$('#order_item_final_amount'+j).val(item_total);
	 // 		}
	 // 	}
	 // 	$('#final_total_amount').val(final_amount);
	 // }
	 
	 // $(document).on('change', '.item_qty', function(){
	 // 	calculation(count);
	 // });

	 // $(document).on('blur', '.item_price', function(){
	 // 	calculation(count);
	 // });

	 // // function moreThan() {
	 // // 	$disable_button = $('#total_item').val();
	 // // 	if($disable_button = 5){
	 // // 		$('#add_row').disabled();
	 // // 	}


	 // // }

	 // // $(document).on('blur', '.item_discount', function(){
	 // // 	calculation(count);
	 // // });


});




	// $("#disbuse").hide();

		//get the table data 
	// get_table_data();
	// image_loaded();
	
	// Display_Total_Money();
	// Display_Total_Users();
	// Display_Total_LoanRequest();

	// function Display_Total_Money(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalAmount.php',
	// 		data: "get_total_money",
	// 		success:function(html){
	// 			$("#cashview").html(html);
	// 		}
	// 	});
	// }

	// function Display_Total_Users(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalUsers.php',
	// 		data: "get_total_users",
	// 		success:function(html){
	// 			$("#usersview").html(html);
	// 		}
	// 	});
	// }

	// function Display_Total_LoanRequest(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalLoanRequest.php',
	// 		data: "get_total_request",
	// 		success:function(html){
	// 			$("#loanview").html(html);
	// 		}
	// 	});
	// }



		// function image_loaded() {
		// 	$(document).on("change","#img_file", function(){
		// 		var property = document.getElementById("img_file").files[0];
		// 		var image_name = property.name;
		// 		var	image_extension = image_name.split(".").pop().toLowerCase();
		// 		var image_size = property.size;
		// 		if ($.inArray(image_extension,["png","jpg","jpeg"]) === -1) {
		// 			$("#uploaded_image").html("<div class='alert alert-danger' role='alert'>Invalid Format Selected</div>");
		// 			// alert("invalid Image Format");
		// 		}
				
		// 		if (image_size > 200000) {
		// 			$("#uploaded_image").html("<div class='alert alert-warning' role='alert'>Image File is too large</div>");
		// 			// alert("invalid Image size");
		// 		}
		// 		else
		// 		{
		// 			var form_data = new FormData();
		// 			form_data.append("img_file", property);
		// 			$.ajax({
		// 				url:"../backbone/controller/loadImage.php",
		// 				method:"POST",
		// 				data:form_data,
		// 				contentType:false,
		// 				cache:false,
		// 				processData:false,
		// 				beforeSend:function(){
		// 					$("#uploaded_image").html("<label class='atext-success' >Uploading Image ...</label>");
		// 				},
		// 				success:function(data){
		// 					$("#uploaded_image").html(data);
		// 				}
		// 			});
		// 		}
		// 	});
		// }




	


		// $("#send").click(function(e){
		// 	$('#bookForm').validate({
		//         rules: {
		//             img_file: {
		//                 required: true
		//             },
		//             pdf_file: {
		//                 required: true
		//             },
		//             bookTitle: {
		//                 required: true
		//             },
		//             isbn: {
		//                 required: true
		//             },
		//             department: {
		//                 required: true
		//             },
		//             level: {
		//                 required: true
		//             },
		//             category: {
		//                 required: true
		//             },
		//             author: {
		//                 required: true
		//             },
		//             year: {
		//                 required: true
		//             },
		//             bookDescription: {
		//                 required: true
		//             }
		            
		// 		},
		// 		messages: {
		// 			img_file : "Please Select Image File",
		// 			pdf_file : "Please Select a PDF File",
		// 			bookTitle : "Enter Book Title",
		// 			isbn : "Enter Book ISBN No",
		// 			department : "Select Department",
		// 			level : "Select Level",
		// 			category : "Select Category",
		// 			author : "Enter Author Name",
		// 			year : "Enter Year Published",
		// 			bookDescription : "Enter Description of the Book",
					
					
		// 		},
		// 		  submitHandler: submitForm
	 //    	});

		// 	   	function submitForm(){
		// 		var data = $("#bookForm").serialize();
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '../../controller/addLoan.php',
		// 			data: data,
		// 			beforeSend: function(){
		// 				$("#submitBook").html('Submitting Leave..');
		// 				$("#submitBook").attr("disabled", true);
		// 			},	
		// 			success: function(response){
		// 				if (response == 'created'){
		// 					get_table_data();
		// 					$("#submitBook").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#submitBook").attr("disabled", false);
		// 					$("#bookForm")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.success('Loan Request Submitted','Success Alert',{timeOut:20000});
		// 				}else{
		// 					get_table_data();
		// 					$("#submitBook").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#submitBook").attr("disabled", false);
		// 					$("#bookForm")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.error(response,'Dange Alert',{timeOut:20000});
		// 				}
		// 			}
		// 		});// ends create ajax 
		// 	}

		// });


		// function get_table_data(){

		// 	$.ajax({
		// 		url: "../backbone/controller/getBooksTable.php",
		// 		type: "POST",
		// 		data: 'getBooks',
		// 		dataType: 'json',
		// 		beforeSend: function(){

		// 		}
		// 	}).done(function(data){
		// 		//
		// 		if(data.count != 0){
		// 			//call manage data function
		// 			manage_data(data.data);

		// 		}else{
		// 			alert('NO RECORDED LEAVE FOUND');
		// 		}

		// 	});
		// }

		// //manage the data
		// function manage_data(data){
		// 	var row = '';
		// 	$.each(data, function(key, value){
		// 		row += '<tr>'; 
		// 		row += '<td class="text-center upper">'+ value.loan_date +'</td>'; 
		// 		row += '<td class="text-center upper">'+ value.loan_id +'</td>';  
		// 		row += '<td class="text-center upper">'+ value.staff_id +'</td>'; 
		// 		row += '<td class="text-center upper">'+ value.full_name +'</td> ';  
		// 		row += '<td class="text-center upper">'+ value.nexcop_account_no +'</td>'; 
		// 		row += '<td class="text-center upper">'+ value.loan_type +'</a></td>';
		// 		row += '<td class="text-center upper">'+ value.refund_date +'</a></td>';
		// 		row += '<td class="text-center upper">'+'&#8358 ' + value.amount_requested +'</td>'; 
		// 		row += '<td class="text-center upper">'+'&#8358 ' + value.amount_received +'</td>';  
		// 		if(value.loan_status == 'approved'){
		// 			row += '<td class="text-center upper"><span class="label label-success">'+value.loan_status+'</span></td>'; 
		// 		}else if(value.loan_status == 'denied'){
		// 			row += '<td class="text-center upper"><span class="label label-danger">'+value.loan_status+'</span></td>';
		// 		}else if(value.loan_status == 'pending'){
		// 			row += '<td class="text-center upper"><span class="label label-warning">'+value.loan_status+'</span></td>';
		// 		}
		// 		row += '<td class="text-center upper" data-id="'+ value.id +'">'; 
		// 		row += ' <button type="button" data-toggle="modal" data-target="#disbuse-form" id="disbuse" class="btn  btn-info btn-xs disbuse-form"><i class="fa fa-money"></i></button> '; 
		// 		row += ' <button type="button" id="approve" class="btn btn-small btn-success btn-xs"><i class="fa fa-check"></i></button> '; 
		// 		row += ' <button type="button" id="denied" class="btn btn-small btn-danger btn-xs"><i class="fa fa-times"></i></button> '; 
		// 		row += '</td>';
		// 		row += '</tr>'; 
		// 	});

		// 	$("tbody").html(row);
		// }




		// $("#send").click(function(e){
		// 	$('#createLoan').validate({
		//         rules: {
		//             staff_id: {
		//                 required: true
		//             },
		//             full_name: {
		//                 required: true
		//             },
		//             email: {
		//                 required: true,
		//                 email: true
		//             },
		//             nexcop_account_no: {
		//                 required: true
		//             },
		//             phone_number: {
		//                 required: true
		//             },
		//             loan_type: {
		//                 required: true
		//             },
		//             refund_date: {
		//                 required: true
		//             },
		//             amount_requested: {
		//                 required: true
		//             }
		            
		// 		},
		// 		messages: {
		// 			staff_id : "",
		// 			full_name : "",
		// 			email : "",
		// 			nexcop_account_no : "",
		// 			phone_number : "",
		// 			loan_type : "Loan Period is Required",
		// 			refund_date : "Refund Date is Required",
		// 			amount_requested : "Amount is Required",
					
		// 		},
		// 		  submitHandler: submitForm
	 //    	});

		// 	   	function submitForm(){
		// 		var data = $("#createLoan").serialize();
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '../../controller/addLoan.php',
		// 			data: data,
		// 			beforeSend: function(){
		// 				$("#send").html('Submitting Leave..');
		// 				$("#send").attr("disabled", true);
		// 			},	
		// 			success: function(response){
		// 				if (response == 'created'){
		// 					get_table_data();
		// 					$("#send").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#send").attr("disabled", false);
		// 					$("#createLoan")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.success('Loan Request Submitted','Success Alert',{timeOut:20000});
		// 				}else{
		// 					get_table_data();
		// 					$("#send").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#send").attr("disabled", false);
		// 					$("#createLoan")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.error(response,'Dange Alert',{timeOut:20000});
		// 				}
		// 			}
		// 		});// ends create ajax 
		// 	}

		// });


		// $("body").on("click","#approve", function(){
		// 	var id = $(this).parent("td").data('id');
		// 	var c_obj = $(this).parents("tr");
		// 	$.ajax({
		// 		type: 'POST',
		// 		url: '../../controller/ApproveLoan.php',
		// 		data: {id:id},
		// 		beforeSend: function(){
		// 				$("#approve").html('<img src="../assets/images/gif/ajax-loader2.gif"> &ensp;Updating Leave...	');
		// 				$("#approve").attr("disabled", true);
		// 			},	
		// 		success: function(response){
		// 			if (response == 'updated'){
		// 				get_table_data();
		// 				$("#approve").html('<i class="fa fa-save"></i>&ensp;Update');
		// 				$("#approve").attr("disabled", false);
		// 				toastr.success('Loan Request Submitted','Success Alert',{timeOut:20000});
		// 			}else{
		// 				get_table_data();
		// 				$("#approve").html('<i class="fa fa-save"></i>&ensp;Update');
		// 				$("#approve").attr("disabled", false);
		// 				toastr.error(response,'Dange Alert',{timeOut:20000});
		// 			}
		// 		}

		// 	});
		// });// ends view user



		// $("body").on("click",".disbuse-form", function(){
		// 	var id = $(this).parent("td").data('id');
		// 	var staff_id = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
		// 	var full_name = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
		// 	var nexcop_account_no = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
		// 	var amount_requested = $(this).parent("td").prev("td").prev("td").prev("td").text();
		// 	// var quantity = $(this).parent("td").prev("td").prev("td").prev("td").text();
		// 	$("#disbuse-form").find("input[name='id']").val(id);
		// 	$("#disbuse-form").find("input[name='staff_id']").val(staff_id);
		// 	$("#disbuse-form").find("input[name='full_name']").val(full_name);
		// 	$("#disbuse-form").find("input[name='nexcop_account_no']").val(nexcop_account_no);
		// 	$("#disbuse-form").find("input[name='amount_requested']").val(amount_requested);
		// 	// $("#edit-material").find("input[name='quantity']").val(quantity);
		// 	// $("#edit-material").find(".edit-id").val(id);
		// });



		// $("#submit_disbuse").click(function(e){
		// 	$('#createDisbuse').validate({
		//         rules: {
		//         		id: {
		//               required: true
		//             },
		//             staff_id: {
		//               required: true
		//             },
		//             full_name: {
		//               required: true
		//             },
		//             nexcop_account_no: {
		//               required: true
		//             },
		//             amount_requested: {
		//               required: true
		//             },
		//             amount_received: {
		//             	required: true
		//             }
		            
		// 		},
		// 		messages: {
		// 			id: "",
		// 			staff_id : "",
		// 			full_name : "",
		// 			nexcop_account_no : "",
		// 			amount_requested : "",
		// 			amount_received : "Please Enter Amount to be Disbused",
					
					
					
		// 		},
		// 		  submitHandler: submitDisbuseForm
	 //    	});

		//    	function submitDisbuseForm(){
		// 			var data = $("#createDisbuse").serialize();
		// 			$.ajax({
		// 				type: 'POST',
		// 				url: '../../controller/createDisbuse.php',
		// 				data: data,
		// 				beforeSend: function(){
		// 					$("#submit_disbuse").html('Submitting Leave..');
		// 					$("#submit_disbuse").attr("disabled", true);
		// 				},	
		// 				success: function(response){
		// 					if (response == 'done'){
		// 						get_table_data();
		// 						Display_Total_Money();
		// 						$("#submit_disbuse").html('<i class="fa fa-save"></i>&ensp;Create');
		// 						$("#submit_disbuse").attr("disabled", false);
		// 						$("#createDisbuse")[0].reset();
		// 						$(".modal").modal('hide');
		// 						toastr.success('Leave Successfully Submitted','Success Alert',{timeOut:20000});
		// 					}else{
		// 						get_table_data();
		// 						$("#submit_disbuse").html('<i class="fa fa-save"></i>&ensp;Create');
		// 						$("#submit_disbuse").attr("disabled", false);
		// 						$("#createDisbuse")[0].reset();
		// 						$(".modal").modal('hide');
		// 						toastr.error(response,'Dange Alert',{timeOut:20000});
		// 					}
		// 				}
		// 			});// ends create ajax 
		// 		}

		// });






