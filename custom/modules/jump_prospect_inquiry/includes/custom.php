<?php 

	global $current_user;

	$user = $current_user->full_name;
	// $branch = $current_user->branch_name_c;

	// echo "<pre>";
	// print_r($current_user);

?>

<script>
	var js_user = '<?= $user ?>';

	$("#record_owner_c").val(js_user);

	var id = "PI_" + "<?=date('Ymd_His');?>";

	$("#inquiry_number_c").val(id);

</script>