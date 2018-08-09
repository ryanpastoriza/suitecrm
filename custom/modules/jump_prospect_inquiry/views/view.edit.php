<?php

require_once 'include/MVC/View/views/view.edit.php';

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jump_prospect_inquiryViewEdit extends ViewEdit
{

	public function preDisplay(){
		parent::preDisplay();
    	echo '<script type="text/javascript" src="custom/modules/jump_prospect_inquiry/js/custom.js"></script>';
    	echo '<link href="custom/modules/jump_prospect_inquiry/style/style.css" rel="stylesheet" type="text/css"/>';
    	include('custom/modules/jump_prospect_inquiry/includes/custom.php');
	}

	public function display(){

		parent::display();
	}

}