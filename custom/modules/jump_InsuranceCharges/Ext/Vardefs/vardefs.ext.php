<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-09 02:41:54
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_insurancecharges_1',
  'source' => 'non-db',
  'module' => 'jump_Quote',
  'bean_name' => 'jump_Quote',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'id_name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1_name"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'save' => true,
  'id_name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
  'link' => 'jump_quote_jump_insurancecharges_1',
  'table' => 'jump_quote',
  'module' => 'jump_Quote',
  'rname' => 'name',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1jump_quote_ida"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_insurancecharges_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_INSURANCECHARGES_TITLE',
);


 // created: 2018-08-08 07:48:48
$dictionary['jump_InsuranceCharges']['fields']['ctpl_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['ctpl_c']['labelValue']='CTPL';

 

 // created: 2018-08-08 07:51:50
$dictionary['jump_InsuranceCharges']['fields']['insurancecoverage_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['insurancecoverage_c']['labelValue']='Insurance Coverage';

 

 // created: 2018-08-08 07:52:24
$dictionary['jump_InsuranceCharges']['fields']['jump_company_id_c']['inline_edit']=1;

 

 // created: 2018-08-08 07:52:24
$dictionary['jump_InsuranceCharges']['fields']['providercompany_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['providercompany_c']['labelValue']='Provider/Company';

 

 // created: 2018-08-08 07:53:24
$dictionary['jump_InsuranceCharges']['fields']['totalinsurancecharges_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['totalinsurancecharges_c']['labelValue']='Total Insurance Charges';

 

 // created: 2018-08-08 07:53:38
$dictionary['jump_InsuranceCharges']['fields']['totalpremium_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['totalpremium_c']['labelValue']='Total Premium';

 
?>