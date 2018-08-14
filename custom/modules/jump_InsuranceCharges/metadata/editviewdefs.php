<?php
$module_name = 'jump_InsuranceCharges';
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
            'name' => 'jump_quote_jump_insurancecharges_1_name',
            'label' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'providercompany_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVIDERCOMPANY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'insurancecoverage_c',
            'studio' => 'visible',
            'label' => 'LBL_INSURANCECOVERAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'totalpremium_c',
            'label' => 'LBL_TOTALPREMIUM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ctpl_c',
            'label' => 'LBL_CTPL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'totalinsurancecharges_c',
            'label' => 'LBL_TOTALINSURANCECHARGES',
          ),
        ),
      ),
    ),
  ),
);
;
?>
