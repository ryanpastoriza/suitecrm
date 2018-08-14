<?php
$module_name = 'm20_Opportunity';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => '',
          2 => 'DELETE',
          3 => '',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'opportunityid_c',
            'label' => 'LBL_OPPORTUNITYID',
          ),
          1 => 
          array (
            'name' => 'inq_num_c',
            'label' => 'LBL_INQ_NUM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_source_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'budget_amount_c',
            'label' => 'LBL_BUDGET_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sales_executive_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_EXECUTIVE',
          ),
          1 => 
          array (
            'name' => 'purchased_timeframe_c',
            'studio' => 'visible',
            'label' => 'LBL_PURCHASED_TIMEFRAME',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'estimated_closedate_c',
            'label' => 'LBL_ESTIMATED_CLOSEDATE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'base_model_c',
            'studio' => 'visible',
            'label' => 'LBL_BASE_MODEL',
          ),
          1 => 
          array (
            'name' => 'color_c',
            'studio' => 'visible',
            'label' => 'LBL_COLOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'model_description_c',
            'studio' => 'visible',
            'label' => 'LBL_MODEL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'paymentmode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTMODE',
          ),
          1 => 
          array (
            'name' => 'financing_term_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCING_TERM',
          ),
        ),
      ),
    ),
  ),
);
;
?>


<style>
  #ul-btn li {
    float:left;
  }
  #ul-btn{
    margin-top:-10px;
  }
</style>

<ul class="pull-right" id="ul-btn">
  <li id="liwon"><button class="btn btn-whtie" value="won" id="won">CLOSE AS WON</button></li>
  <li id="lilost"><button class="btn btn-whtie" value="lost" id="lost">CLOSE AS LOST</button></li>
  <li id="lirepoen"><button class="btn btn-whtie" value="open" id="re-open">RE-OPEN</button></li>
  <li id="liQuote"  class="hide"><button class="btn btn-whtie " value="open" id="quote">GENERATE QUOTE</button></li>
</ul>


<script>
  $(function(){
    var status = $('#status_c').text();
    if(status === 'won'){
      $('#ul-btn').addClass('hide');
    }
    if(status === 'lost'){
      $('#lilost').addClass('hide');
      $('#liwon').addClass('hide');
    }
    if(status === 'open'){
      $('#lirepoen').addClass('hide');
      $('#liQuote').removeClass('hide');
    }

    // alert($('#status_c').text());
    $(document).on('click', '#lost, #won, #re-open', function(){
      var value = {
        'status' : $(this).val(),
        'opId' : $('#opportunityid_c').text(),
      };
      
      $.get(`<?php echo 'index.php?module=m20_Opportunity&action=post_status'; ?>`, { data : value }, function(resp){
        if(resp){
          location.reload();
        }
      });
      

    });
  });
</script>