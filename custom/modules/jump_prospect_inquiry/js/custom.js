
SUGAR.util.doWhen("typeof $ != 'undefined'", function(){

	// on load inputs -----------------------------------------------

	$(function(){

		$("#financing_term_c").attr('disabled', 'disabled');
		$("#btn_financing_term_c").attr('disabled', 'disabled');

		$("#inquiry_number_c").attr('readonly', 'readonly');
		
		// disable company fields
		$("#company_name_c").attr("disabled", "disabled");
		$("#website_c").attr("disabled", "disabled");
		$("#business_phone_c").attr("disabled", "disabled");

		// remove age borders/readonly
		$("#age_c").attr("readonly", "readonly");

			
		// record information
		$("#record_owner_c").attr('readonly', 'readonly');
		$("#owning_branch_c").attr('readonly', 'readonly');
		$("#owning_dealer_c").attr('readonly', 'readonly');
		$("#created_on_c").attr('readonly', 'readonly');
		$('#created_on_c_trigger').remove();
		$("#body_type_c").attr('readonly', 'readonly');

	});

	// --------------------------------------------------------------
	
	// birthdate
	var bdate = $("#birthdate_c").val();
	var age   = $("#age_c").val();

	$(document).on('click', '.selector', function(event) {

		var bdate_new = $("#birthdate_c").val();
		var dob = bdate_new;
		dob = new Date(dob);
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

		if( age <= 0 ){
			alert("Please input a valid birthdate.");
			$("#birthdate_c").val('')
		}
		else{
			$("#age_c").val(age)	
		}

		if( age ){

			var now 	 = new Date();
			var date_val = new Date ($("#inquiry_date_c").val());
			

			if( date_val > now ){
				alert( "Cannot input future dates." );
				$("#inquiry_date_c").val("")
			}
			
		}

	});


	// prospect type
	$(document).on('change', '#prospect_type_c', function(event) {
		event.preventDefault();
		var curVal = $(this).val();
		if( curVal == "individual" ){
			$("#company_name_c").attr("disabled", "disabled");
			$("#website_c").attr("disabled", "disabled");
			$("#business_phone_c").attr("disabled", "disabled");

			$("#gender_c").removeAttr("disabled");
			$("#marital_status_c").removeAttr("disabled");

		}

		else{
			$("#company_name_c").removeAttr("disabled");
			$("#website_c").removeAttr("disabled");
			$("#business_phone_c").removeAttr("disabled");

			$("#gender_c").attr("disabled", "disabled");
			$("#marital_status_c").attr("disabled", "disabled");

		}

	});


	// payment mode
	$('#payment_mode_c').change(function(event) {

		var financing_term = $(this).val();

		if( financing_term == "financing" ){
			$("#financing_term_c").removeAttr('disabled');
			$("#btn_financing_term_c").removeAttr('disabled');
		}
		else{
			$("#financing_term_c").attr('disabled', 'disabled');
			$("#btn_financing_term_c").attr('disabled', 'disabled');
		}
	});


});

