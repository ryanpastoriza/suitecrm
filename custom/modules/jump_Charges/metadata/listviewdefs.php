<?php
$module_name = 'jump_Charges';
$listViewDefs [$module_name] = 
array (
  'JUMP_QUOTE_JUMP_CHARGES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_QUOTE_TITLE',
    'id' => 'JUMP_QUOTE_JUMP_CHARGES_1JUMP_QUOTE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FREE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FREE',
    'width' => '10%',
  ),
  'AMOUNT2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AMOUNT2',
    'width' => '10%',
  ),
  'CHARGETYPE2_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CHARGETYPE2',
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
