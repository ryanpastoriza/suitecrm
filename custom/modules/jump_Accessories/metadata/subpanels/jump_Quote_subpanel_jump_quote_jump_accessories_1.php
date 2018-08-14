<?php
// created: 2018-08-13 01:10:57
$subpanel_layout['list_fields'] = array (
  'itemno2_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ITEMNO2',
    'id' => 'JUMP_ACCESSORY_ID_C',
    'link' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'itemdescription_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ITEMDESCRIPTION',
    'width' => '10%',
    
  ),
  'free_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FREE',
    'width' => '10%',
  ),
  'price2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRICE2',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'jump_Accessories',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_Accessories',
    'width' => '5%',
    'default' => true,
  ),
);