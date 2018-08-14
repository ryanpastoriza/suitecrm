<?php

require_once 'include/MVC/View/views/view.detail.php';

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jump_prospect_inquiryViewDetail extends ViewDetail
{

	public function preDisplay(){

		if(array_key_exists('detail_action', $_GET)){
			$detail_action = $_GET['detail_action'];
		}
		else{
			$detail_action = "prospect";
		}
		
		if(strtolower($detail_action) == 'prospect'){

	    	echo '<script type="text/javascript" src="custom/modules/jump_prospect_inquiry/js/custom.js"></script>';
	    	echo '<link href="custom/modules/jump_prospect_inquiry/style/style.css" rel="stylesheet" type="text/css"/>';
	    	include('custom/modules/jump_prospect_inquiry/includes/detail.php');

		}
		else {
	    	echo '<link href="custom/modules/jump_prospect_inquiry/style/master_style.css" rel="stylesheet" type="text/css"/>';
	    	include('custom/modules/jump_prospect_inquiry/includes/detail_master.php');
		}
		

		parent::preDisplay();
	}

	public function display(){
		parent::display();
	}
	
}