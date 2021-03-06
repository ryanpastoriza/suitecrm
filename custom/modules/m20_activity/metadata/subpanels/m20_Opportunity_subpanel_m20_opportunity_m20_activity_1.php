<?php
// created: 2018-08-13 02:51:05
$subpanel_layout['list_fields'] = array (
  'activitytype' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ACTIVITYTYPE',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
    'module' => 'm20_activity',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'm20_activity',
    'width' => '5%',
    'default' => true,
  ),
);