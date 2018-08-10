<?php 

	global $current_user;

	$user = $current_user->full_name;
	$branch = $current_user->branch_name_c;

	// echo "<pre>";
	// print_r($current_user);

?>

<script>
	var js_user = '<?= $user ?>';
	var branch  = '<?= $branch ?>';

	$("#record_owner_c").val(js_user);
	$("#branch_name_c").val(branch);

	var id = "PI_" + "<?=date('Ymd_His');?>";

	$("#inquiry_number_c").val(id);

</script>