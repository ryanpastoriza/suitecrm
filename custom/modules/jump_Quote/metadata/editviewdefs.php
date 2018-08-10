<?php
$module_name = 'jump_Quote';
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'm20_opportunity_jump_quote_1_name',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'validuntil_c',
            'label' => 'LBL_VALIDUNTIL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leadsource_c',
            'studio' => 'visible',
            'label' => 'LBL_LEADSOURCE',
          ),
          1 => 
          array (
            'name' => 'paymentmode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTMODE',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'revisionno_c',
            'label' => 'LBL_REVISIONNO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'modeldescription_c',
            'studio' => 'visible',
            'label' => 'LBL_MODELDESCRIPTION',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'aos_products_id_c',
                'name' => 'modeldescription_c',
                'price' => 'unitprice_c',
                'description' => 'vehicledetails_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'unitprice_c',
            'label' => 'LBL_UNITPRICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor1_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR1',
          ),
          1 => 
          array (
            'name' => 'vehicledetails_c',
            'studio' => 'visible',
            'label' => 'LBL_VEHICLEDETAILS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor2_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor3_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR3',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
