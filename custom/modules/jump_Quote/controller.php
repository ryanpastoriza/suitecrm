<?php
require_once('custom/include/database/CDBManager.php');
require_once ('DetailController.php');
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class Jump_QuoteController extends SugarController
{
    public function action_make_active() {
        $q_id = $_REQUEST['q_id'];
        $db = DBManagerFactory::getInstance();
        $query = " 	UPDATE jump_quote_cstm SET status_c = 'Active' WHERE id_c = '" . $q_id . "'";
        $execute = $db->query($query, true);
    }
    public function action_detailview()
    {
        if (array_key_exists('record',$_GET)) {

            $detail = new DetailController();
            $this->view_object_map['quote'] = $detail->getQuoteDetail($_GET['record']);
             $this->view = 'detail';
        }
    }
}    
