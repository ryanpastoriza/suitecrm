<?php
$module_name = 'jump_branch';
$listViewDefs [$module_name] = 
array (
  'DEALER_NAME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DEALER_NAME',
    'id' => 'JUMP_DEALER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'BRANCH_CODE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_BRANCH_CODE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIN_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TIN',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'OWNING_BRANCH_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OWNING_BRANCH',
    'width' => '10%',
  ),
);
;
?>
