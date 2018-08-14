<?php
/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 7/6/2018
 * Time: 9:03 AM
 */

class Jump_sales_invoiceViewlist extends ViewList{

    public function display()
    {
        if ($this->view_object_map['isListViewEmpty']){
            parent::display();
        }
        else{
            $template = new Sugar_Smarty();
            $template->display('custom/modules/jump_sales_invoice/tpls/view.list.php');
        }
    }
}