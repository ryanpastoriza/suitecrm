<?php

/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 7/6/2018
 * Time: 10:10 AM
 */
class DetailController extends SugarController
{

    public function getInvoiceDetail($invoice_id)
    {
        $data = array();
        global $db;
        $sql = "SELECT *, 
                  jump_sales_invoice.id AS invoice_id,
                  jump_sales_invoice.name AS invoice_no,
                  jump_sales_order.id AS order_id,
                  jump_country.name AS  country,
                  jump_city_municipality.name AS city,
                  jump_region.name AS region,
                  jump_province.name AS province,
                  jump_model_description.name AS model_name,
                  jump_lead_source.name AS leadsource,
                  CONCAT(users.first_name,' ',users_cstm.middle_name_c,' ',users.last_name) AS sales_agent
              FROM jump_sales_invoice 
              LEFT JOIN jump_sales_invoice_cstm ON jump_sales_invoice_cstm.id_c = jump_sales_invoice.id
              LEFT JOIN jump_sales_order ON jump_sales_invoice_cstm.order_id_pk_c = jump_sales_order.id
              LEFT JOIN jump_sales_order_cstm ON jump_sales_order.id = jump_sales_order_cstm.id_c
              LEFT JOIN jump_customer_info ON jump_sales_order.customer_id = jump_customer_info.id
              LEFT JOIN jump_customer_info_cstm ON jump_customer_info.id = jump_customer_info_cstm.id_c
              LEFT JOIN jump_country ON jump_customer_info_cstm.jump_country_id_c = jump_country.id
              LEFT JOIN jump_city_municipality ON jump_customer_info_cstm.jump_city_municipality_id_c = jump_city_municipality.id
              LEFT JOIN jump_region ON jump_customer_info_cstm.jump_region_id_c = jump_region.id
              LEFT JOIN jump_province ON  jump_customer_info_cstm.jump_province_id_c = jump_province.id
              LEFT JOIN jump_model_description_cstm ON jump_sales_order.product_id = jump_model_description_cstm.id_c
              LEFT JOIN jump_model_description ON jump_model_description_cstm.id_c = jump_model_description.id
              LEFT JOIN jump_lead_source ON jump_sales_order.lead_source = jump_lead_source.id
              LEFT  JOIN jump_quote_cstm ON jump_quote_cstm.id_c = jump_sales_order.sales_quote_id
              LEFT JOIN jump_quote ON jump_quote_cstm.id_c = jump_quote.id
              LEFT JOIN users ON jump_sales_order.sales_executive = users.id
              LEFT JOIN users_cstm ON users.id = users_cstm.id_c
              WHERE jump_sales_invoice.id = '{$invoice_id}' LIMIT 1
              ";
        $result = $db->query($sql, true, 'Error retrieving sales invoice details');

            while ($invoice = $db->fetchByAssoc($result)) {

                $data = array(
                    'documents'=> $this->required_document(trim($invoice['order_id_c'])),
                    'vehicle' => [
                        'name' => $invoice['model_name'],
                        'price' => $this->stringToNumber($invoice['unit_price_c']),
                        'color' => [
                            ucwords($invoice['preffered_color']),
                            ucwords($invoice['preferred_color_2_c']),
                            ucwords($invoice['preferred_color_3_c']),
                        ],
                        'detail' => [
                            'Model Year : ' . $invoice['model_year_c'],
                            'Model Code : ' . ucwords($invoice['mmpc_model_code_c']),
                            'Option code : ' . ucwords($invoice['option_code_c']),
                            'Vehicle Type : ' . ucwords($invoice['vehicle_type_c']),
                        ]
                    ],
                    'customer' => [
                        'id' => $invoice['customer_id_c'],
                        'name' => $invoice['customer_name_c'],
                        'tin' => $invoice['tin_c'],
                        'type' => $invoice['prospect_type_c'],
                        'address' => $this->address([
                            $invoice['basic_address_c'],
                            $invoice['city'],
                            $invoice['postal_code_c'],
                            $invoice['province'],
                            $invoice['region'],
                            $invoice['country'],
                            $invoice['country_code'],
                        ]),
                        'lead_source'=>ucwords($invoice['leadsource'])
                    ],
                    'invoice' => [
                        'id' => $invoice['invoice_id'],
                        'number' => $invoice['invoice_no'],
                        'status' => ucwords($invoice['si_status_c']),
                        'payment_mode'=>ucwords($invoice['paymentmode_c']),
                        'sales_executive'=> ucwords($invoice['sales_agent'])
                    ],
                    'order' => [
                        'id' => $invoice['order_id'],
                        'order_no' => trim($invoice['order_id_c'])
                    ]
                );
            }

        return $data;


    }

    private function stringToNumber($string)
    {
        if (!empty($string)){
            $string = explode(',',$string);
            $string = implode('',$string);
        }
        else{
            $string = 0;
        }

        return number_format($string, 2);
    }

    private function required_document($so_number)
    {
        global $db;
        $data = array();
        $sql = "
            SELECT * FROM jump_sales_order
            INNER JOIN jump_required_documents ON jump_sales_order.sales_order_no = jump_required_documents.sales_order_no
            INNER JOIN jump_documents ON jump_documents.id = jump_required_documents.doc_id
            WHERE jump_sales_order.sales_order_no = '{$so_number}'
          ";
        $result = $db->query($sql, true, '');
            while ($document = $db->fetchByAssoc($result)){
                $data[] = $document;
            }

        return $data;
    }

    private function address(array $address)
    {
        //address, city, postal, province, region, country, country code
        return trim($address[0]) . ', ' . trim($address[1]) . ', ' . trim($address[2]) . ', ' . trim($address[3]) . ', ' . trim($address[4]) . ', ' . trim($address[5]) . ', ' . trim($address[6]);
    }
}