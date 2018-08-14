<?php
$module_name = 'jump_InsuranceCharges';
$listViewDefs [$module_name] = 
array (
  'JUMP_QUOTE_JUMP_INSURANCECHARGES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
    'id' => 'JUMP_QUOTE_JUMP_INSURANCECHARGES_1JUMP_QUOTE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PROVIDERCOMPANY_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PROVIDERCOMPANY',
    'id' => 'JUMP_COMPANY_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'CTPL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CTPL',
    'width' => '10%',
  ),
  'TOTALPREMIUM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TOTALPREMIUM',
    'width' => '10%',
  ),
  'TOTALINSURANCECHARGES_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TOTALINSURANCECHARGES',
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
  'JUMP_INSURANCECHARGES_JUMP_COMPANY_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_COMPANY_TITLE',
    'id' => 'JUMP_INSURANCECHARGES_JUMP_COMPANY_1JUMP_COMPANY_IDB',
    'width' => '10%',
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
