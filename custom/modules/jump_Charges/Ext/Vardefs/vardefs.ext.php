<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-09 02:40:55
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1"] = array (
  'name' => 'jump_quote_jump_charges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_charges_1',
  'source' => 'non-db',
  'module' => 'jump_Quote',
  'bean_name' => 'jump_Quote',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'id_name' => 'jump_quote_jump_charges_1jump_quote_ida',
);
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1_name"] = array (
  'name' => 'jump_quote_jump_charges_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'save' => true,
  'id_name' => 'jump_quote_jump_charges_1jump_quote_ida',
  'link' => 'jump_quote_jump_charges_1',
  'table' => 'jump_quote',
  'module' => 'jump_Quote',
  'rname' => 'name',
);
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1jump_quote_ida"] = array (
  'name' => 'jump_quote_jump_charges_1jump_quote_ida',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_charges_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_CHARGES_TITLE',
);


 // created: 2018-08-08 05:46:36
$dictionary['jump_Charges']['fields']['actualcost2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['actualcost2_c']['labelValue']='Actual Cost';

 

 // created: 2018-08-08 05:46:53
$dictionary['jump_Charges']['fields']['amount2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['amount2_c']['labelValue']='Amount';

 

 // created: 2018-08-08 05:47:40
$dictionary['jump_Charges']['fields']['chargecode_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['chargecode_c']['labelValue']='Charge Code';

 

 // created: 2018-08-10 02:51:49
$dictionary['jump_Charges']['fields']['chargetype2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['chargetype2_c']['labelValue']='Charge Type';

 

 // created: 2018-08-08 05:49:52
$dictionary['jump_Charges']['fields']['description']['inline_edit']=true;
$dictionary['jump_Charges']['fields']['description']['comments']='Full text of the note';
$dictionary['jump_Charges']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-08-08 05:50:00
$dictionary['jump_Charges']['fields']['description2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['description2_c']['labelValue']='Description';

 

 // created: 2018-08-08 05:50:30
$dictionary['jump_Charges']['fields']['free_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['free_c']['labelValue']='Free';

 

 // created: 2018-08-08 05:47:40
$dictionary['jump_Charges']['fields']['jump_chargelist_id_c']['inline_edit']=1;

 

 // created: 2018-08-08 05:44:38
$dictionary['jump_Charges']['fields']['name']['inline_edit']=true;
$dictionary['jump_Charges']['fields']['name']['duplicate_merge']='disabled';
$dictionary['jump_Charges']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['jump_Charges']['fields']['name']['merge_filter']='disabled';
$dictionary['jump_Charges']['fields']['name']['unified_search']=false;

 
?>