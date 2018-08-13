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
    'fill quoteid ',

    //The PHP file where your class is located.
    'custom/modules/jump_Quote/quote_logic_hook.php',

    //The class the method is in.
    'QuoteLogicHook',

    //The method to call.
    'quiteid'

];