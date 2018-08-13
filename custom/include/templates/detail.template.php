<?php global $current_user;
 ?>
 <?php $data = $this->view_object_map['quote'];
?>
<section class="panel panel-default" style="margin-top: 5%">
    <div class="panel-heading">
        <a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
            <div class="col-xs-10 col-sm-11 col-md-11">
                PAYMENT SUMMARY
            </div>
        </a>
    </div>
    <div class="panel-body">
        <section class="row" style="padding: 2% 1%">
        
            <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Unit Price</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $up= $data['quote']['up'];
                    echo "&#8369; ".number_format($up, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">CC Add-ons</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Premium on SPecial Color</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                    
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Freight & Handling</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                   
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(-) Unit Discount</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 
                    <?php 
                    $upd= $data['quote']['upd'];
                    echo number_format($upd, 2, '.', ',');
                    ?>
                    </td>
                    
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Net Price</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $up= $data['quote']['up'];
                    $net = $up-$upd;
                    echo "&#8369; ".number_format($net, 2, '.', ',');
                    ?>
                    </td>
                    
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Accessories</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $acc= $data['quote']['acc'];
                    echo "&#8369; ".number_format($acc, 2, '.', ',');
                    ?>
                    </td>
                   
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Insurance</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $acc= $data['quote']['ins'];
                    echo "&#8369; ".number_format($acc, 2, '.', ',');
                    ?>
                    </td>
                    
                </tr>




                <tr style="background-color: #dddddd;">
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Chattel Fee</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $cha= $data['quote']['cha'];
                    echo "&#8369; ".number_format($cha, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr>
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Other Charges</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $oc= $data['quote']['oc'];
                    echo "&#8369; ".number_format($oc, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Down Payment</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $afdp= $data['quote']['dp'];
                    echo "&#8369; ".number_format($afdp, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr>
                   
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Total DP Discount</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Net Down Payment</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $afndp= $data['quote']['ndp'];
                    echo "&#8369; ".number_format($afndp, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr>
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VATable Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VAT-EXEMPT Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr>
                   
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">ZERO RATED Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>


                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Total Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VAT Amount</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Total Amount Due</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">TOTAL CASH OUTLAY</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0.00 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">TOTAL AMOUNT FINANCED</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $taf= $data['quote']['taf'];
                    echo "&#8369; ".number_format($taf, 2, '.', ',');
                    ?>
                    </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">MONTHLY AMORTIZATION</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <?php 
                    $ma= $data['quote']['ma'];
                    echo "&#8369; ".number_format($ma, 2, '.', ',');
                    ?>
                    </td>
                </tr>
            </table>
        </section>
</section>
<script>
    let status = document.getElementById('status_c').value;
    let quote_id = $('.favorite').attr('record_id');
    function setactive(){      
        window.location = '/suitecrm/index.php?module=jump_Quote&action=make_active&q_id=' + quote_id;
       
    }


function calculate(){  
    location.reload();
}


</script>
