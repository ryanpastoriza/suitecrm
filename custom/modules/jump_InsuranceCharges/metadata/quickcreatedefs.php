<?php
$module_name = 'jump_InsuranceCharges';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'providercompany_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVIDERCOMPANY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'insurancecoverage_c',
            'studio' => 'visible',
            'label' => 'LBL_INSURANCECOVERAGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'totalpremium_c',
            'label' => 'LBL_TOTALPREMIUM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ctpl_c',
            'label' => 'LBL_CTPL',
          ),
        ),
        4 => 
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
