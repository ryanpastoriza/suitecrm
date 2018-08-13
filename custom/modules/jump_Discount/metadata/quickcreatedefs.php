<?php
$module_name = 'jump_Discount';
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
            'name' => 'promoname2_c',
            'studio' => 'visible',
            'label' => 'LBL_PROMONAME2',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'jump_promo_id_c',
                'name' => 'promoname2_c',
                'description1_c' => 'description2_c',
                'discountamount1_c' => 'discountamount_c',
                'discountname1_c' => 'discountname_c',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'discountname_c',
            'label' => 'LBL_DISCOUNTNAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description2_c',
            'label' => 'LBL_DESCRIPTION2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'discountamount_c',
            'label' => 'LBL_DISCOUNTAMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'applyptodp_c',
            'label' => 'LBL_APPLYPTODP',
          ),
          1 => 
          array (
            'name' => 'applyamounttodp_c',
            'label' => 'LBL_APPLYAMOUNTTODP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'applyptoaf_c',
            'label' => 'LBL_APPLYPTOAF',
          ),
          1 => 
          array (
            'name' => 'applyamounttoaf_c',
            'label' => 'LBL_APPLYAMOUNTTOAF',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'applyptoup_c',
            'label' => 'LBL_APPLYPTOUP',
          ),
          1 => 
          array (
            'name' => 'applyamounttoup_c',
            'label' => 'LBL_APPLYAMOUNTTOUP',
          ),
        ),
      ),
    ),
  ),
);
;
?>
