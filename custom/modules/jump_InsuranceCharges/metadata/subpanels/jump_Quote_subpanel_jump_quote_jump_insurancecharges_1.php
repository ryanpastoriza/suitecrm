<?php
// created: 2018-08-01 02:08:31
$subpanel_layout['list_fields'] = array (
  'providercompany_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PROVIDERCOMPANY',
    'id' => 'JUMP_COMPANY_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_Company',
    'target_record_key' => 'jump_company_id_c',
  ),
  'insurancecoverage_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INSURANCECOVERAGE',
    'width' => '10%',
  ),
  'totalpremium_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TOTALPREMIUM',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
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