<?php
$module_name = 'jump_Charges';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'free_c',
            'label' => 'LBL_FREE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'chargecode_c',
            'studio' => 'visible',
            'label' => 'LBL_CHARGECODE',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'jump_chargelist_id_c',
                'name' => 'chargecode_c',
                'actualcost_c' => 'actualcost2_c',
                'amount_c' => 'amount2_c',
                'chargetype_c' => 'chargetype2_c',
                'description1_c' => 'description2_c',
              ),
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'chargetype2_c',
            'studio' => 'visible',
            'label' => 'LBL_CHARGETYPE2',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount2_c',
            'label' => 'LBL_AMOUNT2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'actualcost2_c',
            'label' => 'LBL_ACTUALCOST2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description2_c',
            'label' => 'LBL_DESCRIPTION2',
          ),
        ),
      ),
    ),
  ),
);
;
?>
