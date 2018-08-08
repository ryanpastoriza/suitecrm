<<<<<<< HEAD:custom/modulebuilder/builds/dms_opportunities/SugarModules/modules/m20_activity/vardefs.php
<?php
=======
<?php /* Smarty version 2.6.29, created on 2018-08-08 10:25:40
         compiled from themes%5CSuiteP%5Cinclude/SearchForm/tpls/footer.tpl */ ?>
{*
>>>>>>> Prospect:cache/smarty/templates_c/%%A6^A6F^A6FFC63F%%footer.tpl.php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
<<<<<<< HEAD:custom/modulebuilder/builds/dms_opportunities/SugarModules/modules/m20_activity/vardefs.php
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
=======
 * Copyright (C) 2011 - 2016 SalesAgility Ltd.
>>>>>>> Prospect:cache/smarty/templates_c/%%A6^A6F^A6FFC63F%%footer.tpl.php
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
<<<<<<< HEAD:custom/modulebuilder/builds/dms_opportunities/SugarModules/modules/m20_activity/vardefs.php

$dictionary['m20_activity'] = array(
    'table' => 'm20_activity',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'activitytype' => 
  array (
    'required' => false,
    'name' => 'activitytype',
    'vname' => 'LBL_ACTIVITYTYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'activitytype_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('m20_activity', 'm20_activity', array('basic','assignable','security_groups'));
=======
*}
</form>
{literal}
<script>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
{/literal}
        document.getElementById('up_down_img').src='{sugar_getimagepath file="basic_search.gif"}';
        document.getElementById('up_down_img').setAttribute('alt',"{sugar_translate label='LBL_ALT_HIDE_OPTIONS'}");
{literal}
    }else{
{/literal}
        document.getElementById('up_down_img').src='{sugar_getimagepath file="advanced_search.gif"}';
        document.getElementById('up_down_img').setAttribute('alt',"{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}");
{literal}			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
</script>
{/literal}

{if $searchFormInPopup}
    {include file='include/SearchForm/tpls/footerPopup.tpl'}
{/if}

>>>>>>> Prospect:cache/smarty/templates_c/%%A6^A6F^A6FFC63F%%footer.tpl.php
