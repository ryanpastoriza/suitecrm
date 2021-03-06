<?php
$module_name = 'jump_prospect_inquiry';
$listViewDefs [$module_name] = 
array (
  'INQUIRY_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_INQUIRY_NUMBER',
    'width' => '10%',
  ),
  'INQUIRY_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_INQUIRY_DATE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
  ),
  'COMPANY_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMPANY_NAME',
    'width' => '10%',
  ),
  'BASE_MODEL_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BASE_MODEL',
    'id' => 'J41_BASE_MODEL_ID_C',
    'width' => '10%',
  ),
  'BODY_TYPE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_BODY_TYPE',
    'width' => '10%',
  ),
  'COLOR_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COLOR',
    'id' => 'JUMP_COLOR_ID_C',
    'width' => '10%',
  ),
  'PAYMENT_MODE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_MODE',
    'width' => '10%',
  ),
  'FINANCING_TERM_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FINANCING_TERM',
    'id' => 'JUMP_FINANCINGTERM_ID_C',
    'width' => '10%',
  ),
  'LEAD_SOURCE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEAD_SOURCE',
    'id' => 'J41_LEAD_SOURCE_ID_C',
    'width' => '10%',
  ),
  'RATING_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RATING',
    'width' => '10%',
  ),
  'SALES_EXECUTIVE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SALES_EXECUTIVE',
    'id' => 'USER_ID_C',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DISQ_REASON_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISQ_REASON',
    'width' => '10%',
  ),
  'ACTIVATION_STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACTIVATION_STATUS',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'link' => false
  ),
);
;

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$a = explode("&", $actual_link);
$action = $a[1];

if( $action == "action=index" ){

    unset($listViewDefs [$module_name]['ACTIVATION_STATUS_C']);
    // unset($listViewDefs [$module_name]['DISQ_REASON_C']);
    unset($listViewDefs [$module_name]['COMPANY_NAME_C']);

}

else{

    if( $action == "action=individual_prospect_list" ){
      unset($listViewDefs [$module_name]['COMPANY_NAME_C']);
    }

    unset($listViewDefs [$module_name]['INQUIRY_DATE_C']);
    unset($listViewDefs [$module_name]['BASE_MODEL_C']);
    unset($listViewDefs [$module_name]['BODY_TYPE_C']);
    unset($listViewDefs [$module_name]['COLOR_C']);
    unset($listViewDefs [$module_name]['PAYMENT_MODE_C']);
    unset($listViewDefs [$module_name]['FINANCING_TERM_C']);
    unset($listViewDefs [$module_name]['LEAD_SOURCE_C']);
    unset($listViewDefs [$module_name]['RATING_C']);
    unset($listViewDefs [$module_name]['STATUS_C']);
    unset($listViewDefs [$module_name]['DISQ_REASON_C']);
}


?>
