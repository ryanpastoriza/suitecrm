<?php
// created: 2018-08-09 02:41:20
$dictionary["jump_Discount"]["fields"]["jump_quote_jump_discount_1"] = array (
  'name' => 'jump_quote_jump_discount_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_discount_1',
  'source' => 'non-db',
  'module' => 'jump_Quote',
  'bean_name' => 'jump_Quote',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_DISCOUNT_1_FROM_JUMP_QUOTE_TITLE',
  'id_name' => 'jump_quote_jump_discount_1jump_quote_ida',
);
$dictionary["jump_Discount"]["fields"]["jump_quote_jump_discount_1_name"] = array (
  'name' => 'jump_quote_jump_discount_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_DISCOUNT_1_FROM_JUMP_QUOTE_TITLE',
  'save' => true,
  'id_name' => 'jump_quote_jump_discount_1jump_quote_ida',
  'link' => 'jump_quote_jump_discount_1',
  'table' => 'jump_quote',
  'module' => 'jump_Quote',
  'rname' => 'name',
);
$dictionary["jump_Discount"]["fields"]["jump_quote_jump_discount_1jump_quote_ida"] = array (
  'name' => 'jump_quote_jump_discount_1jump_quote_ida',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_discount_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_DISCOUNT_1_FROM_JUMP_DISCOUNT_TITLE',
);
