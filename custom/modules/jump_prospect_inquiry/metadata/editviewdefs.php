<?php
$module_name = 'jump_prospect_inquiry';
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
          'label' => '5',
          'field' => '15',
        ),
        1 => 
        array (
          'label' => '5',
          'field' => '15',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prospect_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PROSPECT_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fname_c',
            'label' => 'LBL_FNAME',
          ),
          1 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mname_c',
            'label' => 'LBL_MNAME',
          ),
          1 => 
          array (
            'name' => 'website_c',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lname_c',
            'label' => 'LBL_LNAME',
          ),
          1 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'birthdate_c',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'marital_status_c',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'age_c',
            'label' => 'LBL_AGE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'mobile_number_c',
            'label' => 'LBL_MOBILE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'business_phone_c',
            'label' => 'LBL_BUSINESS_PHONE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'alternate_contact_c',
            'label' => 'LBL_ALTERNATE_CONTACT',
          ),
          1 => 
          array (
            'name' => 'fax_c',
            'label' => 'LBL_FAX',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'email_address_c',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'tin_c',
            'label' => 'LBL_TIN',
          ),
        ),
        9 => 
        array (
          0 => '',
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'postal_code_c',
            'label' => 'LBL_POSTAL_CODE',
          ),
          1 => 
          array (
            'name' => 'basic_address_c',
            'label' => 'LBL_BASIC_ADDRESS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'province_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCE',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'jump_province_id_c',
                'name' => 'province_c',
                'region_c' => 'region_c',
              ),
            ),
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'city_c',
            'label' => 'LBL_CITY',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'inquiry_number_c',
            'label' => 'LBL_INQUIRY_NUMBER',
          ),
          1 => 
          array (
            'name' => 'inquiry_date_c',
            'label' => 'LBL_INQUIRY_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rating_c',
            'studio' => 'visible',
            'label' => 'LBL_RATING',
          ),
          1 => 
          array (
            'name' => 'lead_source_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'base_model_c',
            'studio' => 'visible',
            'label' => 'LBL_BASE_MODEL',
          ),
          1 => 
          array (
            'name' => 'model_description_c',
            'studio' => 'visible',
            'label' => 'LBL_MODEL_DESCRIPTION',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'aos_products_id_c',
                'name' => 'model_description_c',
                'body_type_c' => 'body_type_c',
              ),
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'color_c',
            'studio' => 'visible',
            'label' => 'LBL_COLOR',
          ),
          1 => 
          array (
            'name' => 'body_type_c',
            'label' => 'LBL_BODY_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sales_executive_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_EXECUTIVE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'payment_mode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_MODE',
          ),
          1 => 
          array (
            'name' => 'financing_term_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCING_TERM',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'record_owner_c',
            'label' => 'LBL_RECORD_OWNER',
          ),
          1 => 
          array (
            'name' => 'created_on_c',
            'label' => 'LBL_CREATED_ON',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'owning_branch_c',
            'label' => 'LBL_OWNING_BRANCH',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'owning_dealer_c',
            'label' => 'LBL_OWNING_DEALER',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
