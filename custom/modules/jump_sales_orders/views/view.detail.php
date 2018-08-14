<?php

class Jump_sales_orderViewDetail extends ViewDetail{

    function display(){
    	// $bean = BeanFactory::newBean('jump_sales_order');
    	// $result = $bean->get_full_list();
    	// if(!empty($result)){
    	// 	$result = $result[0];
    	// }
    	// // foreach ($result as $key => $value) {
    	// // 	echo "<pre>";
	    // // 		print_r($value);
	    // // 	echo "</pre>";
    	// // }
    	
    	// $template = new Sugar_Smarty();
    	// $template->assign('result', $result);
    	// $template->display('custom/modules/jump_sales_order/tpls/detailview.tpl');
        include('custom/modules/jump_sales_order/views/templates/Viewdetail.template.php');
        include('custom/modules/jump_sales_order/vue/detailview.php');
    }
}  