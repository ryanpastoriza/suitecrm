<?php

	/**
	 * 
	 */

	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

	class Jump_prospect_inquiryController extends SugarController
	{
		
		public function action_detail(){
			parent::detail();
		}

		public function action_status_update(){

			$db = DBManagerFactory::getInstance();

			$id     	 = $_REQUEST['id'];
			$action 	 = $_REQUEST['status_action'];
			$disq_reason = $_REQUEST['disqualification_reason'];

			if( $action == 'qualify' ){
				$set_status = "Qualified";
			}
			if( $action == 'disqualify' ){
				$set_status = "Disqualified";
			}
			if( $action == 'open' ){
				$set_status = "Open";
			}


			$query = " 	UPDATE 
							jump_prospect_inquiry_cstm
					   	SET 
					   		status_c = '" . $set_status . "',
					   		disq_reason_c = '" . $disq_reason . "'
					   	WHERE id_c = '" . $id . "' ";

			$opps = $this->set_as_opportunity($id);
			$execute = $db->query($query, true);
			$results = $db->fetchByAssoc($execute);
			
			$this->view = 'update_status';
			$this->view_object_map['response'] = $opps;
		}

		public function set_as_opportunity($id){
			
			$db = DBManagerFactory::getInstance();
			$query  = "	SELECT * FROM 
							jump_prospect_inquiry 
						INNER JOIN jump_prospect_inquiry_cstm ON jump_prospect_inquiry_cstm.id_c = jump_prospect_inquiry.id
						WHERE jump_prospect_inquiry_cstm.id_c = '".$id."' LIMIT 1";

			$execute = $db->query($query, true);
			$result  = $db->fetchByAssoc($execute);
			// return $result;

			$payment_mode 		= $result['payment_mode_c'];
			$opportunity_id 	= "PI_OP_".date("Ymd_His");
			$status_type 		= "open";
			$lead_source_id 	= $result['j41_lead_source_id_c'];
			$mode_desc_id		= $result['aos_products_id_c'];
			$color_id			= $result['jump_color_id_c'];
			$financing_term_id  = $result['jump_financingterm_id_c'];
			$base_model_id		= $result['j41_base_model_id_c'];
			$jump_prospect_inquiry_id_c = $result['id'];
			$inqry_number		= $result['inquiry_number_c'];

			// --- Transferring values from Prospect to Opportunity

			// Default Opportunity table
			global $current_user;
			$user_id 	  = $current_user->id;

			$generated_id = create_guid();

			$insert_qry = "INSERT into m20_opportunity 
								values(
									'". $generated_id ."', 
									'". $opportunity_id ."',  
									NOW(), 
									null, 
									null, 
									'". $user_id ."', 
									null, 
									0, 
									null
							) ";

			$exec_insert   = $db->query($insert_qry, true);
			$insert_result = $db->fetchByAssoc($exec_insert);

			// CUstom Opportunity table
			$insert_qry_cstm 	=   "INSERT into m20_opportunity_cstm
										values(
											'". $generated_id ."', 
											null,
											null, 
											null, 
											'". $opportunity_id ."', 
											'" . $jump_prospect_inquiry_id_c . "',
											'" . $lead_source_id ."', 
											'" . $base_model_id ."', 
											'". $payment_mode ."', 
											'" . $financing_term_id . "', 
											'". $user_id ."',
											'" . $mode_desc_id . "', 
											'" . $status_type ."', 
											'" . $color_id ."', 
											'" . $inqry_number . "'
									)";

			$exec_insert_cstm   = $db->query($insert_qry_cstm, true);
			$insert_result_cstm = $db->fetchByAssoc($exec_insert_cstm);

			return $result;
		}

		public function action_individual_prospect_list(){

			parent::action_listview();

		}

		public function action_corporate_prospect_list(){
			
			parent::action_listview();

		}
		
		public function action_master_status_update(){
			$db = DBManagerFactory::getInstance();

			$id     	 	= $_REQUEST['id'];
			$action_status 	= $_REQUEST['action_status'];

			$query = "UPDATE
						jump_prospect_inquiry_cstm
					  SET
					  	activation_status_c = '". $action_status ."'
					  WHERE id_c = '". $id ."'
					 ";
			$execute = $db->query($query, true);
			$results = $db->fetchByAssoc($execute);
			
			$this->view = 'update_status';
			$this->view_object_map['response'] = $results;
			
		}

	}

?>