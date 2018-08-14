<?php
// created: 2018-08-13 00:48:34
$subpanel_layout['list_fields'] = array (
  'providercompany_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PROVIDERCOMPANY',
    'id' => 'JUMP_COMPANY_ID_C',
    'link' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'insurancecoverage_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INSURANCECOVERAGE',
    'width' => '10%',
  ),
  'ctpl_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CTPL',
    'width' => '10%',
  ),
  'totalinsurancecharges_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TOTALINSURANCECHARGES',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'jump_InsuranceCharges',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_InsuranceCharges',
    'width' => '5%',
    'default' => true,
  ),
);