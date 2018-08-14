
<?php if (!empty($this->view_object_map['invoice'])): ?>
<?php $data = $this->view_object_map['invoice'];
//var_export($this->view_object_map['invoice']);
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">#</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <!--            <li><a href="#"><span class=" glyphicon glyphicon-file text-primary"></span> EXPORT TO WORD</a></li>-->
            <li><a href="#"><span class="glyphicon glyphicon-print text-warning"></span> PRINT</a></li>
            <?php if (strtolower($data['invoice']['status']) != 'cancelled'): ?>
                <li>
                    <button data-id="<?php echo $data['invoice']['id']; ?>" id="btn-cancel" class="btn btn-link">
                        <span class="glyphicon glyphicon-ban-circle text-danger"></span> CANCEL
                    </button>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


<div id="mainContent" style="min-height:500px;">
    <div class="head-panel">
        <div class="row">
            <div class="col-sm-6">
                <label for="" style="color:#777;">SALES INVOICE</label>
                <h3 class="sales-order-label"><?php echo $data['invoice']['number']; ?></h3>
            </div>
        </div>

        <div class="panel panel-default" style="margin-top: 1.5%">
            <div class="panel-heading ">
                <a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-1" aria-expanded="false">
                    <div class="col-xs-10 col-sm-11 col-md-11">
                        Summary
                    </div>
                </a>
            </div>

            <div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1"
                 data-id="LBL_ACCOUNT_INFORMATION">
                <div class="row">
                    <div class="col-md-3">
                        <div class="head">
                            <h3>Invoice Information</h3>
                        </div>
                        <div class="body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Invoice No. <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled
                                           value="<?php echo $data['invoice']['number']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Source of Sales <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled
                                           value="<?php echo $data['customer']['lead_source']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Payment Mode <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['invoice']['payment_mode']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Sales Executive <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['invoice']['sales_executive']; ?>" disabled>
                                </div>
                            </form>
                        </div>
                        <div class="head">
                            <h3>Customer Information</h3>
                        </div>
                        <div class="body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Customer Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled
                                           value="<?php echo ucwords($data['customer']['name']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Customer ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled
                                           value="<?php echo ucwords($data['customer']['id']); ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Customer Type</label>
                                            <input type="text" class="block form-control" disabled
                                                   value="<?php echo ucwords($data['customer']['type']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TIN</label>
                                            <input type="text" class="block form-control" disabled
                                                   value="<?php echo ucwords($data['customer']['tin']); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea rows="5" class="block form-control"
                                              disabled><?php echo ucwords($data['customer']['address']); ?></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="head">
                            <h3>Vehicle Information</h3>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Model Description</label>
                                        <input type="text" class="block form-control"
                                               value="<?php echo ucwords($data['vehicle']['name']); ?>" disabled>
                                    </div>
                                    <?php $i = 0; ?>
                                    <?php foreach ($data['vehicle']['color'] as $color): ?>
                                        <?php if (!empty($color)): ?>
                                            <div class="form-group">
                                                <label for="">Preferred
                                                    Color <?php echo $num = ($i += 1) ? ' ' : ($i += 1); ?></label>
                                                <input type="text" class="block form-control"
                                                       value="<?php echo $color; ?>"
                                                       disabled>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Vehicle Unit Price</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">&#8369;</div>
                                            <input type="text" class="block form-control"
                                                   value="<?php echo $data['vehicle']['price']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vehicle Details</label>
                                        <div class="vehicle-details">
                                            <ul>
                                                <?php foreach ($data['vehicle']['detail'] as $detail): ?>
                                                    <li><?php echo $detail ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="vehicle-remarks">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="head">
                            <h3>Accessories</h3>
                        </div>

                    </div>
                    <div class="col-md-3 payment-summary">
                        <div class="head">
                            <h3>Payment Summary</h3>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Unit Price</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value"><strong>&#8369; <?php echo $data['vehicle']['price']; ?></strong></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">CC Addons</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Premium on special color</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Freight & Handling</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(-) Unit Discount</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">NET PRICE</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 945,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(+) Insurance Charges</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(+) Chattel Fee</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(+) Other Charges</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(-) Reservation</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Down Payment</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 189,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Total DP Discount</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">(-) NET Down Payment</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 189,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">VATable Sales</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 843,750.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">VAT-EXEMPT Sales</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">ZERO RATED Sales</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 0.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Total Sales</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 843,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">VAT Amount</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 101,250.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">Total Amount Due</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 945,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">TOTAL CASH OUTLAY</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 189,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">TOTAL AMOUNT FINANCED</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 756,000.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 for="">MONTHLY AMORTIZATION</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="p-value">PHP 82,026.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::: ORDER DETAILS :::::::::::::::::::::::::::::::::::::::::: -->

        <!--        <div class="panel panel-default">-->
        <!--            <div class="panel-heading ">-->
        <!--                <a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-2" aria-expanded="false">-->
        <!--                    <div class="col-xs-10 col-sm-11 col-md-11">-->
        <!--                        Order Details-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!---->
        <!--            <div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-2"-->
        <!--                 data-id="LBL_ACCOUNT_INFORMATION" style="padding:40px 10px;">-->
        <!--                <ul class="nav nav-tabs">-->
        <!--                    <li class="active"><a data-toggle="tab" href="#home">AUTO FINANCING</a></li>-->
        <!--                    <li><a data-toggle="tab" href="#menu1">DISCOUNTS</a></li>-->
        <!--                    <li><a data-toggle="tab" href="#menu2">CHARGES</a></li>-->
        <!--                    <li><a data-toggle="tab" href="#menu3">INSURANCE CHARGES</a></li>-->
        <!--                    <li><a data-toggle="tab" href="#menu4">RESERVATION</a></li>-->
        <!--                </ul>-->
        <!---->
        <!--                <div class="tab-content">-->
        <!--                    <div id="home" class="tab-pane fade in active">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-6">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Bank</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Scheme</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Chattel Fee</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="" class="block">Free Chattel Fee</label>-->
        <!--                                            <input type="checkbox" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <button class="btn btn-success"><i-->
        <!--                                                        class="glyphicon glyphicon-floppy-save"></i>SAVE-->
        <!--                                            </button>-->
        <!--                                            <button disabled><i class="glyphicon glyphico-close"></i>CANCEL</button>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-md-12">-->
        <!--                                    <table class="list view table-responsive table-striped center-table">-->
        <!--                                        <thead>-->
        <!--                                        <th>Select Term</th>-->
        <!--                                        <th>Financial Term</th>-->
        <!--                                        <th>Monthly Amortization</th>-->
        <!--                                        </thead>-->
        <!--                                        <tbody>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>10</td>-->
        <!--                                            <td>82,035</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>12</td>-->
        <!--                                            <td>25,024</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>15</td>-->
        <!--                                            <td>32,125</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>17</td>-->
        <!--                                            <td>54,521</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>19</td>-->
        <!--                                            <td>100,000</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>24</td>-->
        <!--                                            <td>91,248</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>28</td>-->
        <!--                                            <td>65,145</td>-->
        <!--                                        </tr>-->
        <!--                                        <tr>-->
        <!--                                            <td><input type="checkbox"></td>-->
        <!--                                            <td>30</td>-->
        <!--                                            <td>42,154</td>-->
        <!--                                        </tr>-->
        <!--                                        </tbody>-->
        <!--                                    </table>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!---->
        <!--                            <div class="col-md-6">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Down Payment</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Amount Financed</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Downpayment%</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">(-) Discount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row" style="margin-bottom:60px;">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">(-) Discount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">NET Down Payment</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div id="menu1" class="tab-pane fade">-->
        <!--                        <button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>ADD</button>-->
        <!--                        <table class="list view table-responsive table-striped center-table">-->
        <!--                            <thead>-->
        <!--                            <th><i class="glyphicon glyphicon-check"></i></th>-->
        <!--                            <th>Description</th>-->
        <!--                            <th>Discount Amount</th>-->
        <!--                            <th>Apply % to DP</th>-->
        <!--                            <th>Apply Amount to DP</th>-->
        <!--                            <th>Apply % to AF</th>-->
        <!--                            <th>APply Amount to AF</th>-->
        <!--                            <th>Apply % to UP</th>-->
        <!--                            <th>Apply Amount to UP</th>-->
        <!--                            </thead>-->
        <!--                            <tbody>-->
        <!---->
        <!--                            </tbody>-->
        <!--                        </table>-->
        <!--                        <p class="no-records" style="margin-bottom:20px;">No records found.</p>-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-6"></div>-->
        <!--                            <div class="col-md-6">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!---->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Total Discount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to DP %</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to DP Amount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to AF %</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to AF Amount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to UP %</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="">Apply to UP Amount</label>-->
        <!--                                            <input type="text" class="block">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div id="menu2" class="tab-pane fade">-->
        <!--                        <button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>ADD</button>-->
        <!--                        <table class="list view table-responsive table-striped center-table">-->
        <!--                            <thead>-->
        <!--                            <th><i class="glyphicon glyphicon-check"></i></th>-->
        <!--                            <th>Charge Type</th>-->
        <!--                            <th>Charges Code</th>-->
        <!--                            <th>Description</th>-->
        <!--                            <th>Charge Amount</th>-->
        <!--                            <th>Actual Cost</th>-->
        <!--                            </thead>-->
        <!--                            <tbody>-->
        <!---->
        <!--                            </tbody>-->
        <!--                        </table>-->
        <!--                        <p class="no-records" style="margin-bottom:20px;">No records found.</p>-->
        <!--                        <div class="form-group pull-right">-->
        <!--                            <label for="">Total Charges</label>-->
        <!--                            <input type="text" class="block">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div id="menu3" class="tab-pane fade">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-6">-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">Provider Company</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">Insurance Coverage</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">Total Premium</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">CTPL</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">Total Insurance Charges</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div id="menu4" class="tab-pane fade">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-6">-->
        <!--                                <div class="form-group">-->
        <!--                                    <label for="">Reservation</label>-->
        <!--                                    <input type="text" class="block">-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::: ORDER DETAILS :::::::::::::::::::::::::::::::::::::::::: -->

        <div class="panel panel-default">
            <div class="panel-heading ">
                <a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-3" aria-expanded="false">
                    <div class="col-xs-10 col-sm-11 col-md-11">
                        Document Checklist
                    </div>
                </a>
            </div>

            <div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-3"
                 data-id="LBL_ACCOUNT_INFORMATION" style="padding:40px 10px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Document Status</label>
                            <input type="text" class="block" disabled value="Completed">
                        </div>

                    </div>
                    <table class="list view table-responsive table-striped center-table">
                        <thead>
                        <th><i class="glyphicon glyphicon-ok"></i></th>
                        <th>Submitted?</th>
                        <th>Document Type</th>
                        <th>Document Name</th>
                        <th>Mandatory</th>
                        <th>Date Submitted</th>
                        <th>Submitted By</th>
                        <th>Remarks</th>
                        </thead>
                        <tbody>
                        <?php foreach ($data['documents'] as $document): ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?php echo $status = $document['status'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo ucwords($document['document_type']); ?></td>
                                <td><?php echo ucwords($document['name']); ?></td>
                                <td><?php echo ucwords($document['mandatory']); ?></td>
                                <td><?php echo date('Y-m-d', strtotime($document['date_entered'])); ?></td>
                                <td><?php echo ''; ?></td>
                                <td><?php echo ucwords($document['remarks']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="status">
            <span class="pull-right text-danger"><?php echo ucwords($data['invoice']['status']); ?></span>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cancel Invoice</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">This Sales Invoice will be cancelled. Please select one of the reasons
                            below: </p>
                        <section class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-group">
                                    <select id="statusReason" class="form-control">
                                        <option value="Damage">Damage</option>
                                        <option value="Lack of budget-ITNA">Lack of budget-ITNA</option>
                                        <option value="Lack of budget">Lack of budget</option>
                                        <option value="Change preferred model">Change preferred model</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Continue</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <script>
            $(document).ready(function () {

                $('button#btn-cancel').click(function () {
                    // $('#myModal').modal('show');
                    // $('#myModal').on('hidden.bs.modal', function (e) {
                    //
                    // });

                    $.ajax({
                        'url': '<?php echo 'index.php?module=jump_sales_invoice&action=updateStatus'; ?>',
                        'data': {'id': $(this).attr('data-id')},
                        success: function (data) {
                            location.reload();
                        }
                    });
                });

            });
        </script>


