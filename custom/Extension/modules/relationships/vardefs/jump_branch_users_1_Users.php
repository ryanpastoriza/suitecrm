<?php
// created: 2018-08-14 02:53:00
$dictionary["User"]["fields"]["jump_branch_users_1"] = array (
  'name' => 'jump_branch_users_1',
  'type' => 'link',
  'relationship' => 'jump_branch_users_1',
  'source' => 'non-db',
  'module' => 'jump_branch',
  'bean_name' => 'jump_branch',
  'vname' => 'LBL_JUMP_BRANCH_USERS_1_FROM_JUMP_BRANCH_TITLE',
  'id_name' => 'jump_branch_users_1jump_branch_ida',
);
$dictionary["User"]["fields"]["jump_branch_users_1_name"] = array (
  'name' => 'jump_branch_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_BRANCH_USERS_1_FROM_JUMP_BRANCH_TITLE',
  'save' => true,
  'id_name' => 'jump_branch_users_1jump_branch_ida',
  'link' => 'jump_branch_users_1',
  'table' => 'jump_branch',
  'module' => 'jump_branch',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["jump_branch_users_1jump_branch_ida"] = array (
  'name' => 'jump_branch_users_1jump_branch_ida',
  'type' => 'link',
  'relationship' => 'jump_branch_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_BRANCH_USERS_1_FROM_USERS_TITLE',
);
