<?php
// created: 2018-08-08 07:59:29
$dictionary["m20_opportunity_m20_activity_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'm20_opportunity_m20_activity_1' => 
    array (
      'lhs_module' => 'm20_Opportunity',
      'lhs_table' => 'm20_opportunity',
      'lhs_key' => 'id',
      'rhs_module' => 'm20_activity',
      'rhs_table' => 'm20_activity',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'm20_opportunity_m20_activity_1_c',
      'join_key_lhs' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
      'join_key_rhs' => 'm20_opportunity_m20_activity_1m20_activity_idb',
    ),
  ),
  'table' => 'm20_opportunity_m20_activity_1_c',
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
      'name' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'm20_opportunity_m20_activity_1m20_activity_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'm20_opportunity_m20_activity_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'm20_opportunity_m20_activity_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'm20_opportunity_m20_activity_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'm20_opportunity_m20_activity_1m20_activity_idb',
      ),
    ),
  ),
);