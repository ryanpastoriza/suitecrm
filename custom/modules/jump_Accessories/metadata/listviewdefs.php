<?php
$module_name = 'jump_Accessories';
$listViewDefs [$module_name] = 
array (
  'ITEMNO2_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ITEMNO2',
    'id' => 'JUMP_ACCESSORY_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ITEMDESCRIPTION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ITEMDESCRIPTION',
    'width' => '10%',
  ),
  'FREE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FREE',
    'width' => '10%',
  ),
  'PRICE2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRICE2',
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
