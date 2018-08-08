<?php

require_once('include/MVC/View/views/view.list.php');

class Jump_prospect_inquiryViewList extends ViewList {
    

    public function listViewProcess() {
        
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $a = explode("&", $actual_link);
        $action = $a[1];

        $this->processSearchForm();

        if( $action == "action=index" ){
            $this->params['custom_where'] = ' AND Jump_prospect_inquiry_cstm.activation_status_c = "Active" ';
        }

        if( $action == "action=individual_prospect_list" ){
            echo '<div class="moduleTitle">
                    <h2 class="module-title-text"> &nbsp; Individual Prospect <small>(Master)</small></h2>
                    <div class="clear"></div>
                  </div>';
            $this->params['custom_where'] = ' AND Jump_prospect_inquiry_cstm.prospect_type_c = "individual" ';
        }

        if( $action == "action=corporate_prospect_list" ){
            echo '<div class="moduleTitle">
                    <h2 class="module-title-text"> &nbsp; Corporate Prospect <small>(Master)</small></h2>
                    <div class="clear"></div>
                  </div>';
            $this->params['custom_where'] = ' AND Jump_prospect_inquiry_cstm.prospect_type_c = "corporate" ';
        }      

        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();     
        }

    }

    public function preDisplay(){
        parent::preDisplay();
        $this->lv->quickViewLinks = false;
        echo '<script type="text/javascript" src="custom/modules/jump_prospect_inquiry/js/list.js"></script>';
    }

}