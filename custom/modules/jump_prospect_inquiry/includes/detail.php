<?php 

$status = $this->bean->status_c;
$id     = $this->bean->id;

if(array_key_exists('detail_action', $_GET)){
	$action = $_GET['detail_action'];
}
else{
	$detail_action = "prospect";
}
?>

<!-- Qualify Modal -->
<div class="modal fade" id="qualify_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	<br>
        <h5>Are you sure you want to qualify this record?<br>
		Upon qualifying, you will be redirected to Opportunity List and prospect record will be created.</h5>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success qualify_btn" value='qualify'>Qualify</button>
      </div>
    </div>
  </div>
</div>

<!-- Disqualify Modal -->
<div class="modal fade" id="disqualify_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	<br>
        	<h5>This Prospect Inquiry will be <b>disqualified</b>. Please select one of the reasons below:</h5><br><br>
        	<select class="form-control dsq_reason">
        		<option value="Lost">Lost</option>
        		<option value="Cannot Contact">Cannot Contact</option>
        		<option value="No Longer Interested">No Longer Interested</option>
        		<option value="Canceled">Canceled</option>
        		<option value="others">Others</option>
        	</select><br>
        	<textarea class="disq_remarks hidden" placeholder="Place remarks here."></textarea>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success disqualify_btn" value='disqualify'>Disqualify</button>
      </div>
    </div>
  </div>
</div>

<script>
	
	var id 	   = '<?=$id?>';
	var disqualification_reason = "";
	var detail_action = "<?=strtolower($detail_action)?>"
	var status = "<?=strtolower($status)?>"

	$(function(){
		// ----- SET BUTTONS -------------------------------------------
		if( status == 'open' ){
			$("#tab-actions").after("\
										<button class='btn btn-info status_update_btn' id='qualify_btn' data-toggle='modal' data-target='#qualify_modal'><span class='glyphicon glyphicon-thumbs-up'></span> QUALIFY</button>\
										<button class='btn btn-default status_update_btn' id='disqualify_btn' data-toggle='modal' data-target='#disqualify_modal'><span class='glyphicon glyphicon-thumbs-down'></span> DISQUALIFY</button>\
									")
		}
		if( status == 'disqualified' ){
			$("#tab-actions").after(" <button class='btn btn-warning glyphicon glyphicon-folder-open status_update_btn' id='reopen_btn' value='open'> REOPEN INQUIRY</button> ");
		}



		// ------- REMOVE EDIT AND DELETE BUTTONS -----------------------

		if(detail_action == 'prospect'){	
			$("#edit_button").parent().remove();
			$("#delete_button").parent().remove();
		}

	});


	$(document).on('click', '.qualify_btn', function(event) {
		event.preventDefault();
		var action = $(this).val();
		disqualification_reason = "";
		status_request(action);		 
	});

	$(document).on('click', '.disqualify_btn', function(event) {
		event.preventDefault();
		var action = $(this).val();
		
		if( $('.dsq_reason').val() == 'others' ){
			disqualification_reason = $('.disq_remarks').val();
		}
		else{
			disqualification_reason = $(".dsq_reason").val();
		}

		status_request(action);		 
	});

	$(document).on('change', '.dsq_reason', function(event) {
		event.preventDefault();
		if( $(this).val() == 'others' ){
			$(".disq_remarks").removeClass('hidden');
		}
		else{
			$(".disq_remarks").addClass('hidden');
		}
	});

	$(document).on('click', '#reopen_btn', function(event) {
		event.preventDefault();

		var action = $(this).val();
		disqualification_reason = "";
		console.log(action)
		status_request(action);		

	});
	function status_request(action){

		$.ajax({
			url: '<?php echo "index.php?module=jump_prospect_inquiry&action=status_update" ?>',
			type: 'POST',
			dataType: 'JSON',
			data: {'id': id, 'status_action': action, 'disqualification_reason': disqualification_reason},
		})
		.done(function(data) {
			if(data){
				if( action == 'qualify' ){
					window.location = "<?php echo 'index.php?module=m20_Opportunity&action=listview' ?>";
				}
				else{
					location.reload();
				}
			};
		})
		.fail(function(xhr) {
			alert(xhr.responseText);
		})
	}
	




</script>
