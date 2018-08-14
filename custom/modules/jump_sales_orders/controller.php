<?php
require_once('custom/include/database/CDBManager.php');

class Jump_sales_orderController extends SugarController
{

    public function action_orders_list(){                
        $query = "SELECT jump_sales_order.*, jump_customer_info.*, jump_vehicle.*, jump_sales_order.id as so_id
        FROM jump_sales_order
		INNER JOIN jump_customer_info ON jump_sales_order.customer_id = jump_customer_info.id
		INNER JOIN jump_vehicle ON jump_sales_order.product_id = jump_vehicle.id";  
        $res = CDBManager::fetch($query);
        $this->view = 'orderlist';
        $this->view_object_map['data'] = $res;
    }    

    public function action_sales_order(){
    	$this->view = 'salesorder_single';
    	$id = $_REQUEST['data'];
        $query = "SELECT * FROM jump_sales_order WHERE id = '$id'";
		$res = CDBManager::fetchOne($query);
        if(!empty($res)){
            $res['customer'] = $this->fetchCustomer($res['customer_id']);
            $res['vehicle'] = $this->fetchVehicle($res['product_id']);
            $res['status'] = $this->fetchStatus($res['so_status_id']);
            $res['docs']['all'] = $this->fetchAllDocs();
            $res['docs']['submitted'] = $this->fetchReqDocs($res['sales_order_no']);
            $res['allocated'] = $this->isAllocated($res['sales_order_no']);
        }       
        if(!empty($res['customer'])){
            $res['origin'] = $res['customer']['id_c'];
            $res['changed'] = false;
        }
        // $res['aaaaa'] = $this->fetchCustomerByName("Ian Dale P. Blanco");
    	$this->view_object_map['data'] = $res;
    }

    public function action_fetch_customers(){      
        $res = $this->fetchCustomers();
        $this->view = 'fetch';
        $this->view_object_map['data'] = $res;
    }

     public function action_make_so() {
        $q_id = $_REQUEST['q_id'];
        $quote = $this->fetchQuote($q_id);
        $this->view = 'make_so';
        $so = $this->makeSalesOrder($quote);
        $this->view_object_map['data'] = $so;
    }

    public function action_store_so() {
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        $this->setReservation($data['reservation'], $data['id']);
        if($data['changed']){
            $this->view_object_map['data'] = $this->setCustomer($data['customer']['id_c'], $data['id']);
        }else{
           $this->view_object_map['data'] = 0;

        }        
    }

    public function action_submit_doc() {
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        $this->view_object_map['data'] = $this->addDoc($data['doc'], $data['so']);
    }

     public function action_fetch_doc() {
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        $res = [];
        $res['all'] = $this->fetchAllDocs();
        $res['submitted'] = $this->fetchReqDocs($data['so']);
        $this->view_object_map['data'] = $res;
    }

    public function action_set_status() {
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        // $this->view_object_map['data'] = $data;
        $this->view_object_map['data'] = $this->setStatus($data['status'], $data['so']);
    }

    public function action_allocate_vehicle(){
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        // $this->view_object_map['data'] = $data;
        $this->view_object_map['data'] = $this->allocateVehicle($data);
    }

    public function action_copy_so(){
        $this->view = 'fetch';
        $data = $_REQUEST['data'];
        $salesOrder = $this->fetchSalesOrder($data['so']);
        $soNos = $this->copySo($salesOrder, $data['quantity']);
        $soIds = $this->multipleId($data['quantity']);
        $res = $this->storeCopiedSo($salesOrder, $soNos, $soIds);
        $this->view_object_map['data'] = $res;
    }


    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: HELPERS ::::::::::::::::::::::::::::::::::::::::::::::::::::::


    private function makeSoNo($so){
        // $so = "";
        if(!empty($so)){
            $arr = explode("_", $so);
            $no =  str_pad($arr[1] + 1, 5, 0, STR_PAD_LEFT);
            return "SO_" . $no . "_" . date("Ymd");
        }
        return "SO_" . str_pad(1 + 1, 5, 0, STR_PAD_LEFT) . "_" . date("Ymd");
    }

    private function makeSoNoInc($so, $inc){
        if(!empty($so)){
            $arr = explode("_", $so);
            $no =  str_pad($arr[1] + $inc, 5, 0, STR_PAD_LEFT);
            return "SO_" . $no . "_" . date("Ymd");
        }
    }

    private function makeSoId(){
        $id = '';
        $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        for($i=0;$i<12;$i++){
            if(rand(0,1) == 0){
                $id .= rand(0, 9);
            }else{
                $id .= $alphabet[rand(0, 25)];
            }
        }
        return $id;
    }

    private function copySo($so, $inc){
        $lastSo = $this->fetchLastSo();
        $soNos = [];
        for($i=0; $i < $inc; $i++){
            $soNos[] = $this->makeSoNoInc($lastSo['sales_order_no'], ($i + 1));
        }
        return $soNos;
    }

    private function multipleId($quantity){
        $soNos = [];
        for($i=0; $i < $quantity; $i++){
            $soNos[] = $this->makeSoId();
        }
        return $soNos;
    }



    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: FETCH DATA ::::::::::::::::::::::::::::::::::::::::::::::::::::::

    private function fetchCustomer($id){
        $query = "SELECT * FROM jump_customer_info_cstm WHERE id_c ='$id'";
        return CDBManager::fetchOne($query);
    }

    private function fetchCustomers(){
        $query = "SELECT * FROM jump_customer_info_cstm ORDER BY lname_c ASC";
        return CDBManager::fetch($query);
    }

    private function fetchVehicle($id){
        $query = "SELECT jump_model_description.*, jump_model_description_cstm.* FROM jump_model_description 
                INNER JOIN jump_model_description_cstm ON jump_model_description_cstm.id_c = jump_model_description.id
                WHERE id='$id'";
        return CDBManager::fetchOne($query);
    }

    private function fetchStatus($id){
        $query = "SELECT * FROM jump_so_status WHERE id='$id'";
        return CDBManager::fetchOne($query);
    }

    private function fetchLead($id){
        $query = "SELECT * FROM jump_lead_source WHERE id='$id'";
        return CDBManager::fetchOne($query);
    }

    private function fetchLastSo(){
        $query = "SELECT * FROM jump_sales_order ORDER BY date_entered DESC";
        return CDBManager::fetchOne($query);
    }

    private function fetchQuote($id){
        $query = "SELECT jump_quote.*, jump_quote_cstm.* FROM jump_quote 
                INNER JOIN jump_quote_cstm ON jump_quote.id = jump_quote_cstm.id_c 
                WHERE jump_quote.name = '$id'";

        $quote = CDBManager::fetchOne($query);
        $quote['lead'] = $this->fetchLead($quote['jump_lead_source_id_c']);
        $quote['color'] = $this->fetchColor($quote['jump_color_id_c']);
        return $quote;
    }

    private function fetchCustomerByName($name){
        $name = explode(".", $name);
        $fname = explode(" ", $name[0]);
        $lname = explode(" ", $name[1]);
        array_pop($fname);
        $lname = implode(" ", $lname);
        $fname = implode(" ", $fname);
        $lname = trim($lname);
        $fname = trim($fname);        
        $query = "SELECT * FROM jump_customer_info_cstm WHERE lname_c = '$lname' AND fname_c = '$fname'";
        return CDBManager::fetchOne($query)['id_c'];
    }


    private function fetchAllDocs(){
        $query = "SELECT * FROM jump_documents";
        $res = CDBManager::fetch($query);
        foreach ($res as $key => $value) {
            $res[$key]['checked'] = false;
        }
        return $res;
    }

    private function fetchReqDocs($so){
        $query = "SELECT * FROM jump_required_documents WHERE sales_order_no = '$so'";
        return CDBManager::fetch($query);
    }

    private function isAllocated($so) {
        $query = "SELECT * FROM jump_vehicle_allocation WHERE sales_order_no = '$so'";
        $res = CDBManager::fetch($query);
        if(!empty($res)){
            return true;
        }
        return false;
    }

    private function fetchSalesOrder($so){
        $query = "SELECT * FROM jump_sales_order WHERE sales_order_no = '$so'";
        return CDBManager::fetchOne($query);
    }

    private function fetchColor($id){
        $query = "SELECT * FROM jump_color WHERE id = '$id'";
        return CDBManager::fetchOne($query);
    }



    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: SAVE DATA ::::::::::::::::::::::::::::::::::::::::::::::::::::::

    private function makeSalesOrder($quote){
        $date = date('Y-m-d H:i:s');
        $newSo = $this->makeSoNo($this->fetchLastSo()['name']);
        $soId = $this->makeSoId();
        $modified_user_id = $quote['modified_user_id'];
        $created_by = $quote['lead']['created_by'];
        $lead_source = $quote['lead']['id'];
        $preferred_color = $quote['color']['name'];
        $product_id = $quote['jump_model_description_id_c'];
        $customer_id = $this->fetchCustomerByName($quote['prospectname_c']);
        $quote_id = $quote;
        $query = "INSERT INTO jump_sales_order(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, assigned_user_id, sales_order_no, site, lead_source, sales_executive, preffered_color, financing_term, bank, scheme, promo_name, charges_code, provider_company, customer_id, product_id, so_status_id, sales_quote_id) 
        VALUES(
        '$soId', 
        '$newSo', 
        '$date', 
        '$date', 
        '$modified_user_id', 
        '$created_by', 
        'No description', 
        0, 
        '$modified_user_id',
        '$newSo',
        '',
        '$lead_source',
        '$modified_user_id',
        '$preferred_color',
        '',
        '',
        '',
        '',
        '',
        '',
        '$customer_id',
        '$product_id',
        '45426810-4c9f-ccc1-9512-5b3ace025bfc',
        '$quote_id')";
        // $query = "INSERT INTO jump_sales_order(id) VALUES('$soId')";
        // $query = "SELECT * FROM jump_sales_order WHERE sales_order_no = 'SO_01227_20180705'";
        // return CDBManager::fetchOne($query);
        $res = CDBManager::insertOne($query);
        if($res == 1){
            $this->setQuoteStatus("Won", $quote['id_c']);
        }
    }

    private function storeCopiedSo($so, $sonos, $ids) {
        extract($so);
        $query = '';
        $date = date('Y-m-d H:i:s');
        $res = 0;
        foreach ($sonos as $key => $value) {
            $query = "INSERT INTO jump_sales_order(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, assigned_user_id, sales_order_no, site, lead_source, sales_executive, preffered_color, financing_term, bank, scheme, promo_name, charges_code, provider_company, customer_id, product_id, so_status_id, sales_quote_id) 
                VALUES(
                '{$ids[$key]}', 
                '{$sonos[$key]}', 
                '$date', 
                '$date', 
                '$modified_user_id', 
                '$created_by', 
                'No description', 
                0, 
                '$assigned_user_id',
                '{$sonos[$key]}',
                '',
                '$lead_source',
                '$modified_user_id',
                '$preferred_color',
                '',
                '',
                '',
                '',
                '',
                '',
                '$customer_id',
                '$product_id',
                '45426810-4c9f-ccc1-9512-5b3ace025bfc',
                '$sales_quote_id')";
            $res = CDBManager::insertOne($query);
        }
        return $res;
        
    }

    private function addDoc($doc, $so){
        $query = "INSERT INTO jump_required_documents(status, sales_order_no, doc_id) VALUES('1', '$so', '$doc')";
        return CDBManager::insertOne($query);
    }



    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: EDIT DATA ::::::::::::::::::::::::::::::::::::::::::::::::::::::

    private function setQuoteStatus($status, $id){
        $query = "UPDATE jump_quote_cstm SET  status_c = '$status' WHERE id_c = '$id'";
        return CDBManager::insertOne($query);
    }

    private function setCustomer($customer, $so){
        $query = "UPDATE jump_sales_order SET  customer_id = '$customer' WHERE id = '$so'";
        return CDBManager::insertOne($query);
    }

    private function setReservation($amount, $so){
        $query = "UPDATE jump_sales_order SET  reservation_amount = $amount WHERE id = '$so'";
        return CDBManager::insertOne($query);
    }

    private function setStatus($status, $so){
        $ss = "";
        if($status == "For Allocation"){
            $ss = '5806af8e-8a10-6269-dc39-5b3aceddc2c0';
        }
        if($status == "For Invoicing"){
            $ss = '66da0901-c510-c2fc-37ab-5b3ace799d9d';
        }
        $query = "UPDATE jump_sales_order SET  so_status_id = '$ss' WHERE id = '$so'";
        // return $query;
        return CDBManager::insertOne($query);
    }

    private function allocateVehicle($so){
        $query = "INSERT INTO jump_vehicle_allocation(sales_order_no) VALUES('$so')";
        // return $query;
        return CDBManager::insertOne($query);
    }


}    

