<?php
$module_name = 'jump_AutoFinancing';
$listViewDefs [$module_name] = 
array (
  'JUMP_QUOTE_JUMP_AUTOFINANCING_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JUMP_QUOTE_JUMP_AUTOFINANCING_1_FROM_JUMP_QUOTE_TITLE',
    'id' => 'JUMP_QUOTE_JUMP_AUTOFINANCING_1JUMP_QUOTE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BANK_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BANK',
    'id' => 'JUMP_BANK_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SCHEME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SCHEME',
    'id' => 'JUMP_SCHEME_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'CHATELFEE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CHATELFEE',
    'width' => '10%',
  ),
  'CHATELFEEFREE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CHATELFEEFREE',
    'width' => '10%',
  ),
  'DOWNPAYMENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DOWNPAYMENT',
    'width' => '10%',
  ),
  'AMOUNTFINANCED_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AMOUNTFINANCED',
    'width' => '10%',
  ),
  'DOWNPAYMENTP_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DOWNPAYMENTP',
    'width' => '10%',
  ),
  'DISCOUNT1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISCOUNT1',
    'width' => '10%',
  ),
  'DISCOUNT2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISCOUNT2',
    'width' => '10%',
  ),
  'NETDOWNPAYMENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NETDOWNPAYMENT',
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
