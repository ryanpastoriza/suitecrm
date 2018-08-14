<?PHP
require_once('include/MVC/View/SugarView.php');

class Jump_sales_orderViewSalesorder_single extends SugarView {

    // public function BlackholeViewDashboard() {
    //         parent::SugarView();
    // }

    public function __construct() {
        parent::SugarView();
        $this->options['show_footer'] = false;
        $this->options['show_header'] = false;

    }

    public function display() {
    	ob_end_clean();
        echo json_encode($this->view_object_map['data']);
    }
}