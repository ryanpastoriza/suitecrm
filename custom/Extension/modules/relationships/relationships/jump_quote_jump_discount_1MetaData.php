<?php
// created: 2018-08-09 02:41:19
$dictionary["jump_quote_jump_discount_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'jump_quote_jump_discount_1' => 
    array (
      'lhs_module' => 'jump_Quote',
      'lhs_table' => 'jump_quote',
      'lhs_key' => 'id',
      'rhs_module' => 'jump_Discount',
      'rhs_table' => 'jump_discount',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jump_quote_jump_discount_1_c',
      'join_key_lhs' => 'jump_quote_jump_discount_1jump_quote_ida',
      'join_key_rhs' => 'jump_quote_jump_discount_1jump_discount_idb',
    ),
  ),
  'table' => 'jump_quote_jump_discount_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'jump_quote_jump_discount_1jump_quote_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jump_quote_jump_discount_1jump_discount_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jump_quote_jump_discount_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jump_quote_jump_discount_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jump_quote_jump_discount_1jump_quote_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jump_quote_jump_discount_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'jump_quote_jump_discount_1jump_discount_idb',
      ),
    ),
  ),
);