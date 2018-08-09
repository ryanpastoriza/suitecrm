
IF THE Prospect and Master columns will be the same copy and paste the code below to metadata/listviewdefs.php


START HERE ------>

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$a = explode("&", $actual_link);
$action = $a[1];

if( $action == "action=index" ){

    unset($listViewDefs [$module_name]['ACTIVATION_STATUS_C']);
    unset($listViewDefs [$module_name]['DISQ_REASON_C']);
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

