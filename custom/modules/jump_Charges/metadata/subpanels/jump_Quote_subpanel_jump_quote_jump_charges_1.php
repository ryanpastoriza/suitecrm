<?php
// created: 2018-08-13 01:15:50
$subpanel_layout['list_fields'] = array (
  'chargecode_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CHARGECODE',
    'id' => 'JUMP_CHARGELIST_ID_C',
    'width' => '10%',
    'link' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'chargetype2_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CHARGETYPE2',
  ),
  'free_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FREE',
    'width' => '10%',
  ),
  'actualcost2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACTUALCOST2',
    'width' => '10%',
  ),
  'amount2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNT2',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'jump_Charges',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_Charges',
    'width' => '5%',
    'default' => true,
  ),
);