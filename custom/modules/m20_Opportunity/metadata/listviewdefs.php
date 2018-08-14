<?php
$module_name = 'm20_Opportunity';
$listViewDefs [$module_name] = 
array (
  'OPPORTUNITYID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OPPORTUNITYID',
    'width' => '10%',
    'link' => true,
  ),
  'INQ_NUM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_INQ_NUM',
    'width' => '10%',
  ),
  'CUSTOMER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER',
    'id' => 'JUMP_PROSPECT_INQUIRY_ID_C',
    'link' => false,
    'width' => '10%',
  ),
  'BASE_MODEL_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BASE_MODEL',
    'id' => 'J41_BASE_MODEL_ID_C',
    'link' => false,
    'width' => '10%',
  ),
  'COLOR_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COLOR',
    'id' => 'JUMP_COLOR_ID_C',
    'link' => false,
    'width' => '10%',
  ),
  'SALES_EXECUTIVE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SALES_EXECUTIVE',
    'id' => 'USER_ID_C',
    'link' => false,
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => false,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>


<script>
  $(function(){
    $('.advanced').addClass('hide');
  });
</script>