<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 6/13/2018
 * Time: 4:01 PM
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ProspectLogicHook{

    public function fullname($bean, $event, $arguments)
    {
        $bean->name = ucwords($bean->fname_c) . " " . ucwords($bean->mname_c) . " " . ucwords($bean->lname_c);
    }

}