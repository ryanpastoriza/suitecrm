<?php

	$activation_status = $this->bean->activation_status_c;
	$id = $this->bean->id;

?>

<script>
	
	$(function(){


		var act_status = "<?=strtolower($activation_status)?>"

		if( act_status == 'active' ){
			$(".module-title-text").append( "<small class='text-success'><b>( " + act_status + " )</b></small>" );

			$("#tab-actions").after("<button class='btn btn-danger master_btns'><span class='glyphicon glyphicon-remove-sign'></span> Deactivate</button>");
		}
		else {
			$(".module-title-text").append( "<small class='text-danger'><b>( " + act_status + " )</b></small>" );

			$("#tab-actions").after("<button class='btn btn-success master_btns'><span class='glyphicon glyphicon-ok-sign'></span> Activate</button>");
		}


	});

	$(document).on('click', '.master_btns', function(event) {
		event.preventDefault();

		var action_status = $(this).attr('action_status');
		status_request(action_status);

	});


	function status_request(action_status){

		var id = "<?= $id ?>";

		$.ajax({
			url: '<?php echo "index.php?module=jump_prospect_inquiry&action=master_status_update" ?>',
			type: 'POST',
			dataType: 'JSON',
			data: {'id': id, 'action_status': action_status},
		})
		.done(function(data) {
			location.reload();
		})
		.fail(function(xhr) {
			alert(xhr.responseText);
		})
	}


</script>