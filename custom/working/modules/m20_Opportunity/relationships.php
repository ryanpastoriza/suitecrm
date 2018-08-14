<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$relationships = array (
  'm20_opportunity_modified_user' => 
  array (
    'id' => '6b491b8a-c467-0568-9e4c-5b6d04d59814',
    'id' => 'd1879488-7ab8-81cf-4d24-5b6cdd054976',
    'relationship_name' => 'm20_opportunity_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_created_by' => 
  array (
    'id' => '6c1f3ab8-3e2e-330a-4a3e-5b6d045732f1',
    'id' => 'd1a6d6bb-3891-38f5-14a8-5b6cdd90d2b2',
    'relationship_name' => 'm20_opportunity_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_assigned_user' => 
  array (
    'id' => '6cde4eca-a7d9-998f-86ae-5b6d04390615',
    'id' => 'd1e55fc1-6e90-1c1e-d3db-5b6cdd9e5c83',
    'relationship_name' => 'm20_opportunity_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'securitygroups_m20_opportunity' => 
  array (
    'id' => '6d73397a-b9b7-ca7e-6db1-5b6d04de4f1d',
    'id' => 'd2049bbf-4ca8-792b-0827-5b6cdd807f56',
    'relationship_name' => 'securitygroups_m20_opportunity',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'm20_Opportunity',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_m20_activity_1' => 
  array (
    'id' => '668dd5bf-64bb-0eb2-4388-5b6d0440f4a1',
    'id' => '256b7da0-91df-1e9c-2945-5b6cddcd6139',
    'relationship_name' => 'm20_opportunity_m20_activity_1',
    'lhs_module' => 'm20_Opportunity',
    'lhs_table' => 'm20_opportunity',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_activity',
    'rhs_table' => 'm20_activity',
    'rhs_key' => 'id',
    'join_table' => 'm20_opportunity_m20_activity_1_c',
    'join_key_lhs' => 'm20_opportunity_m20_activity_1m20_opportunity_ida',
    'join_key_rhs' => 'm20_opportunity_m20_activity_1m20_activity_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'm20_opportunity_jump_quote_1' => 
  array (
    'rhs_label' => 'Quote',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'jump_Quote',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_jump_quote_1',
  ),
);