<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 6/13/2018
 * Time: 4:01 PM
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OpportunityIDLogicHook{

    public function opp_id($bean, $event, $arguments)
    {
        $str = 'OP_'.date('Ymd_His');

        $bean->opportunityid_c = $str;
        $bean->name = $str;
        // $bean->status_type_c = 'open';
        // $bean->last_name  = ucwords($bean->last_name);
        
    }
    
}