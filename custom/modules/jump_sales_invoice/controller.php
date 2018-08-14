<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 7/2/2018
 * Time: 10:08 AM
 */

require_once ('DetailController.php');
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jump_sales_invoiceController extends SugarController
{

    public function action_listview()
    {
            $this->view_object_map['isListViewEmpty'] = $this->isListviewEmpty();
            $this->view = 'list';
    }

    public function action_detailview()
    {
        if (array_key_exists('record',$_GET)) {

            $detail = new DetailController();
            $this->view_object_map['invoice'] = $detail->getInvoiceDetail($_GET['record']);
             $this->view = 'detail';
        }
    }

    public function action_EditView()
    {
        global $db;

        if (array_key_exists('id', $_REQUEST)) {

            $status = 'for invoicing';
            $order_id = $_REQUEST['id'];
//            $order_id = 'e8f61t52g98b';
            $order_query = "
                SELECT *, jump_customer_info.name AS customer_name, jump_sales_order.id AS order_id
                FROM jump_sales_order 
                INNER JOIN jump_so_status ON jump_sales_order.so_status_id = jump_so_status.id
                INNER JOIN jump_customer_info ON jump_sales_order.customer_id = jump_customer_info.id
                WHERE jump_so_status.name = '{$status}'
                AND jump_sales_order.id = '{$order_id}'
                 LIMIT 1
                ";


            $status_result = $db->query($order_query, true, 'error reading of sales order status');

            if ($db->getRowCount($status_result)) {
                while ($order = $db->fetchByAssoc($status_result)) {

                    $invoice = BeanFactory::newBean('jump_sales_invoice');
                    $invoice->order_id_pk_c = $order['order_id'];
                    $invoice->order_id_c = $order['sales_order_no'];
                    $invoice->customer_id_c = $order['customer_id'];
                    $invoice->customer_name_c = $order['customer_name'];
                    $invoice->si_status_c = 'open';
                    $invoice->sales_executive_c = $order['sales_executive'];
                    $invoice->color_c = $order['preffered_color'];
                    $invoice->name = $this->invoiceNumber();
                    $invoice->save();

                    //update the order status id to completed
                    $this->updateOrderStatus($order_id);

                }

            }
        }
        SugarApplication::redirect('index.php?module=jump_sales_invoice&action=listview');

    }

    public function action_updateStatus()
    {
        if (array_key_exists('id', $_GET))
        {
            $id = $_GET['id'];
            $invoice = BeanFactory::getBean('jump_sales_invoice', $id);
            $invoice->si_status_c = 'cancelled';
            $invoice->save();
        }
    }

    private function updateOrderStatus($order_id)
    {
        $order = BeanFactory::getBean('jump_sales_order', $order_id);
        $order->so_status_id =  $this->getStatusId('completed');
        $order->save();

    }

    private function getStatusId($status)
    {
        global $db; $respond = '';
        $sql = "SELECT id FROM jump_so_status WHERE name = '{$status}' LIMIT 1";
        $result = $db->query($sql, true, '');
        while ($status = $db->fetchByAssoc($result)){
            $respond  = $status['id'];
        }
        return $respond;

    }

    private function isListviewEmpty()
    {
        global $db;

        $sql = 'SELECT * FROM jump_sales_invoice';
        $result = $db->query($sql, true, 'encounter server error on checking sales invoice');

        return $result = $db->getRowCount($result) ? true : false;

    }

    private function invoiceNumber()
    {
        $num = 1;
        $current_invoice_number = $this->getLastInvoiceNumber();

        if (!empty($current_invoice_number)) {

            $current_invoice_number = explode('_', $current_invoice_number);

            $num = $current_invoice_number[1] + 1;
        }

        $new_invoice_number = str_pad($num, 5, 0, STR_PAD_LEFT);

        $new_invoice_number = 'SI_' . $new_invoice_number . '_' . date('Ymd');

        return $new_invoice_number;

    }

    private function isOrderIdExist($order_id)
    {
        global $db;
        $sql = "SELECT * FROM jump_sales_invoice_cstm WHERE order_id_c = '{$order_id}'";
        $result = $db->query($sql, true, 'encounter server error on retrieving sales invoice order no');

        return $result = $db->getRowCount($result);

    }

    private function getLastInvoiceNumber()
    {
        $invoice_number = '';
        global $db;
        $sql = 'SELECT name FROM jump_sales_invoice ORDER BY date_entered DESC LIMIT 1';
        $result = $db->query($sql, true, 'encounter server error on retrieving sales invoice id');
        if ($db->getRowCount($result)) {
            while ($invoice = $db->fetchByAssoc($result)) {
                $invoice_number = $invoice['name'];
            }
        }

        return $invoice_number;
    }
}