<?php
 // created: 2018-08-09 02:40:55
$layout_defs["jump_Quote"]["subpanel_setup"]['jump_quote_jump_charges_1'] = array (
  'order' => 100,
  'module' => 'jump_Charges',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_CHARGES_TITLE',
  'get_subpanel_data' => 'jump_quote_jump_charges_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
