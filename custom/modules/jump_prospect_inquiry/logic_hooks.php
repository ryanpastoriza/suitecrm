<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 6/13/2018
 * Time: 3:55 PM
 */


$hook_version = 1;
$hook_array = [];

$hook_array['before_save'] =[];
$hook_array['before_save'][] = [
    1,

    //Label. A string value to identify the hook.
    'concat the fnames, mnames, lnames',

    //The PHP file where your class is located.
    'custom/modules/jump_prospect_inquiry/prospect_logic_hook.php',

    //The class the method is in.
    'ProspectLogicHook',

    //The method to call.
    'fullname'
];