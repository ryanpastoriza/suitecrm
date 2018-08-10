<?php
// created: 2018-08-10 02:41:39
$subpanel_layout['list_fields'] = array (
  'financingterm_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FINANCINGTERM',
    'id' => 'JUMP_FINANCINGTERM_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_FinancingTerm',
    'target_record_key' => 'jump_financingterm_id_c',
  ),
  'chattelfeefree_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CHATTELFEEFREE',
    'width' => '10%',
  ),
  'chattelfee_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CHATTELFEE',
    'width' => '10%',
  ),
  'downpayment_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOWNPAYMENT',
    'width' => '10%',
  ),
  'downpaymentp_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOWNPAYMENTP',
    'width' => '10%',
  ),
  'discount1_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNT1',
    'width' => '10%',
  ),
  'discount2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNT2',
    'width' => '10%',
  ),
  'monthlyamortization_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_MONTHLYAMORTIZATION',
    'width' => '10%',
  ),
  'amountfinanced_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNTFINANCED',
    'width' => '10%',
  ),
  'netdownpayment_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_NETDOWNPAYMENT',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_AutoFinancing',
    'width' => '5%',
    'default' => true,
  ),
);