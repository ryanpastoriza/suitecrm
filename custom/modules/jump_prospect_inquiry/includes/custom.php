<?php 

	global $current_user;

	$user   = $current_user->full_name;
	$branch = $current_user->jump_branch_users_1_name;
	$branch_id = $current_user->jump_branch_users_1jump_branch_ida;

?>

<script>
	
	$(function(){

		branch_id = "<?= $branch_id ?>";

		$.ajax({
			url: '<?php echo "index.php?module=jump_prospect_inquiry&action=get_dealer" ?>',
			type: 'POST',
			dataType: 'JSON',
			data: {'id': branch_id},
		})
		.done(function(data) {
			var owning_dealer = data.owning_dealer;
			$("#owning_dealer_c").val(owning_dealer);

		})
		.fail(function(xhr) {
			alert(xhr.responseText);
		})

	});

	
	
	var js_user = '<?= $user ?>';
	$("#record_owner_c").val(js_user);

	var id = "PI_" + "<?=date('Ymd_His');?>";
	$("#inquiry_number_c").val(id);
	
	var branch = "<?= $branch ?>";
	$("#owning_branch_c").val(branch);

</script>