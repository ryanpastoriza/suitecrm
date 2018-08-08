<?php

/**
 * 
 */
require_once('include/MVC/View/SugarView.php');
class Jump_prospect_inquiryViewUpdate_status extends SugarView
{
	
	public function __construct()
	{
		parent::SugarView();
		$this->options['show_footer'] = false;
		$this->options['show_header'] = false;
	}

	public function display(){
		ob_end_clean();
		echo json_encode($this->view_object_map['response']);
	}
}