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
    'capitalize the first letter of employee',

    //The PHP file where your class is located.
    'custom/modules/m20_Opportunity/opportunityID_logic_hook.php',

    //The class the method is in.
    'OpportunityIDLogicHook',

    //The method to call.
    'opp_id'
];