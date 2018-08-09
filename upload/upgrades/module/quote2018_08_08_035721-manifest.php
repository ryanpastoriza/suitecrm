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



// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'jump',
  'author' => 'Jyde',
  'description' => 'quote',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'quote',
  'published_date' => '2018-08-08 03:57:19',
  'type' => 'module',
  'version' => 1533700639,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'quote',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'jump_AutoFinancing',
      'class' => 'jump_AutoFinancing',
      'path' => 'modules/jump_AutoFinancing/jump_AutoFinancing.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'jump_Bank',
      'class' => 'jump_Bank',
      'path' => 'modules/jump_Bank/jump_Bank.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'jump_ChargeList',
      'class' => 'jump_ChargeList',
      'path' => 'modules/jump_ChargeList/jump_ChargeList.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'jump_Charges',
      'class' => 'jump_Charges',
      'path' => 'modules/jump_Charges/jump_Charges.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'jump_Color',
      'class' => 'jump_Color',
      'path' => 'modules/jump_Color/jump_Color.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'jump_Company',
      'class' => 'jump_Company',
      'path' => 'modules/jump_Company/jump_Company.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'jump_Discount',
      'class' => 'jump_Discount',
      'path' => 'modules/jump_Discount/jump_Discount.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'jump_InsuranceCharges',
      'class' => 'jump_InsuranceCharges',
      'path' => 'modules/jump_InsuranceCharges/jump_InsuranceCharges.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'jump_Promo',
      'class' => 'jump_Promo',
      'path' => 'modules/jump_Promo/jump_Promo.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'jump_Quote',
      'class' => 'jump_Quote',
      'path' => 'modules/jump_Quote/jump_Quote.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'jump_Scheme',
      'class' => 'jump_Scheme',
      'path' => 'modules/jump_Scheme/jump_Scheme.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_AutoFinancing',
      'to' => 'modules/jump_AutoFinancing',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Bank',
      'to' => 'modules/jump_Bank',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_ChargeList',
      'to' => 'modules/jump_ChargeList',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Charges',
      'to' => 'modules/jump_Charges',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Color',
      'to' => 'modules/jump_Color',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Company',
      'to' => 'modules/jump_Company',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Discount',
      'to' => 'modules/jump_Discount',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_InsuranceCharges',
      'to' => 'modules/jump_InsuranceCharges',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Promo',
      'to' => 'modules/jump_Promo',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Quote',
      'to' => 'modules/jump_Quote',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/jump_Scheme',
      'to' => 'modules/jump_Scheme',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);