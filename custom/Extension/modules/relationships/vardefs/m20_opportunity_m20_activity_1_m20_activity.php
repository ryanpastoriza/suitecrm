<?php
// created: 2018-08-08 07:59:30
$dictionary["m20_activity"]["fields"]["m20_opportunity_m20_activity_1"] = array (
  'name' => 'm20_opportunity_m20_activity_1',
  'type' => 'link',
  'relationship' => 'm20_opportunity_m20_activity_1',
  'source' => 'non-db',
  'module' => 'm20_Opportunity',
  'bean_name' => 'm20_Opportunity',
  'vname' => 'LBL_M20_OPPORTUNITY_M20_ACTIVITY_1_FROM_M20_OPPORTUNITY_TITLE',
  'id_name' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
);
$dictionary["m20_activity"]["fields"]["m20_opportunity_m20_activity_1_name"] = array (
  'name' => 'm20_opportunity_m20_activity_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M20_OPPORTUNITY_M20_ACTIVITY_1_FROM_M20_OPPORTUNITY_TITLE',
  'save' => true,
  'id_name' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
  'link' => 'm20_opportunity_m20_activity_1',
  'table' => 'm20_opportunity',
  'module' => 'm20_Opportunity',
  'rname' => 'name',
);
$dictionary["m20_activity"]["fields"]["m20_opportunity_m20_activity_1m20_opportunity_ida"] = array (
  'name' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
  'type' => 'link',
  'relationship' => 'm20_opportunity_m20_activity_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_M20_OPPORTUNITY_M20_ACTIVITY_1_FROM_M20_ACTIVITY_TITLE',
);
