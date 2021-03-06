<?php
$module_name = 'jump_AutoFinancing';
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
            'name' => 'jump_quote_jump_autofinancing_1_name',
            'label' => 'LBL_JUMP_QUOTE_JUMP_AUTOFINANCING_1_FROM_JUMP_QUOTE_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bank_c',
            'studio' => 'visible',
            'label' => 'LBL_BANK',
          ),
          1 => 
          array (
            'name' => 'scheme_c',
            'studio' => 'visible',
            'label' => 'LBL_SCHEME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'chattelfee_c',
            'label' => 'LBL_CHATTELFEE',
          ),
          1 => 
          array (
            'name' => 'chattelfeefree_c',
            'label' => 'LBL_CHATTELFEEFREE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'downpayment_c',
            'label' => 'LBL_DOWNPAYMENT',
          ),
          1 => 
          array (
            'name' => 'amountfinanced_c',
            'label' => 'LBL_AMOUNTFINANCED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'downpaymentp_c',
            'label' => 'LBL_DOWNPAYMENTP',
          ),
          1 => 
          array (
            'name' => 'discount1_c',
            'label' => 'LBL_DISCOUNT1',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'discount2_c',
            'label' => 'LBL_DISCOUNT2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'netdownpayment_c',
            'label' => 'LBL_NETDOWNPAYMENT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'financingterm_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCINGTERM',
          ),
          1 => 
          array (
            'name' => 'monthlyamortization_c',
            'label' => 'LBL_MONTHLYAMORTIZATION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
