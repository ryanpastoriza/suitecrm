<?php 

	global $current_user;

	$user = $current_user->full_name;

?>

<script>
	
	var js_user = '<?= $user ?>';
	var id = "PI_" + "<?=date('Ymd_His');?>";

	$("#inquiry_number_c").val(id);
	$("#record_owner_c").val(js_user);

</script>