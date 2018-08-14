<?php
$module_name = 'jump_Promo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DISCOUNTNAME1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISCOUNTNAME1',
    'width' => '10%',
  ),
  'DISCOUNTAMOUNT1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISCOUNTAMOUNT1',
    'width' => '10%',
  ),
  'DESCRIPTION1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DESCRIPTION1',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
