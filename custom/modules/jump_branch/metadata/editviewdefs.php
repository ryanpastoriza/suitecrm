<?php
$module_name = 'jump_branch';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'branch_code_c',
            'label' => 'LBL_BRANCH_CODE',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tin_c',
            'label' => 'LBL_TIN',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dealer_name_c',
            'studio' => 'visible',
            'label' => 'LBL_DEALER_NAME',
          ),
          1 => 
          array (
            'name' => 'owning_branch_c',
            'label' => 'LBL_OWNING_BRANCH',
          ),
        ),
      ),
    ),
  ),
);
;
?>
