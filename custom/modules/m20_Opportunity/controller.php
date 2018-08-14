<?php


class M20_OpportunityController extends SugarController
{
  
    public function action_post_status(){
        global $db;
        $data  = $_REQUEST['data'];
        $status = $data['status'];
        $opID = $data['opId'];
        $ret = $db->query("UPDATE `m20_opportunity_cstm` SET `status_c`='{$status}' WHERE (`opportunityid_c`='{$opID}')");
        $this->view = 'status';
        $this->view_object_map['data'] = $ret ;
    }
}