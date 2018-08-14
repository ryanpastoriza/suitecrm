<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 6/13/2018
 * Time: 4:01 PM
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class QuoteLogicHook{

    public function quiteid($bean, $event, $arguments)
    {
        if(!$bean->name){
            $bean->name = $this->quoteNumber();
        }
        $bean->revisionno_c = $this->revNumber($bean);
        $bean->status_c = "Draft";
    	
    }
    private function revNumber($bean)
    {
        $num = 0;
        $current_rev_number = $this->getLastrevNumber($bean);
        if (is_numeric($current_rev_number)) {
            $num = $current_rev_number + 1;
        }
        return $num;

    }
    private function getLastrevNumber($bean)
    {
        $rev_number = '';
        global $db;
        $sql = 'SELECT revisionno_c FROM jump_quote_cstm WHERE id_c = "'. $bean->id .'"';
        $result = $db->query($sql, true, 'encounter server error on retrieving sales rev id');
        if ($db->getRowCount($result)) {
            while ($rev = $db->fetchByAssoc($result)) {
                $rev_number = $rev['revisionno_c'];
            }
        }
        return $rev_number;
    }
    private function quoteNumber()
    {
        $num = 1;
        $current_quote_number = $this->getLastquoteNumber();

        if (!empty($current_quote_number)) {

            $current_quote_number = explode('_', $current_quote_number);

            $num = $current_quote_number[1] + 1;
        }

        $new_quote_number = str_pad($num, 5, 0, STR_PAD_LEFT);

        $new_quote_number = 'SQID_' . $new_quote_number . '_' . date('Ymd');

        return $new_quote_number;

    }
    
    private function getLastquoteNumber()
    {
        $quote_number = '';
        global $db;
        $sql = 'SELECT name FROM jump_quote ORDER BY date_entered DESC LIMIT 1';
        $result = $db->query($sql, true, 'encounter server error on retrieving sales quote id');
        if ($db->getRowCount($result)) {
            while ($quote = $db->fetchByAssoc($result)) {
                $quote_number = $quote['name'];
            }
        }

        return $quote_number;
    }



}