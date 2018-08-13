<?php

require_once 'include/MVC/View/views/view.edit.php';

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jump_QuoteViewEdit extends ViewEdit
{

	public function preDisplay(){
		parent::preDisplay();
    	echo '<script type="text/javascript" src="custom/modules/jump_quote/js/custom.js"></script>';
    	
	}

	public function display(){
		parent::display();
		// echo "<h1>hello</h1>";
	}

}