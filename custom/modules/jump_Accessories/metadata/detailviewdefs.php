<?php
$module_name = 'jump_Accessories';
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
            'name' => 'jump_quote_jump_accessories_1_name',
            'label' => 'LBL_JUMP_QUOTE_JUMP_ACCESSORIES_1_FROM_JUMP_QUOTE_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'itemno2_c',
            'studio' => 'visible',
            'label' => 'LBL_ITEMNO2',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'jump_accessory_id_c',
                'name' => 'itemno2_c',
                'price_c' => 'price2_c',
                'description' => 'itemdescription_c',
              ),
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'itemdescription_c',
            'label' => 'LBL_ITEMDESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'free_c',
            'label' => 'LBL_FREE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'price2_c',
            'label' => 'LBL_PRICE2',
          ),
        ),
      ),
    ),
  ),
);
;
?>