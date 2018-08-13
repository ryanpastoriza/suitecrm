
SUGAR.util.doWhen("typeof $ != 'undefined'", function(){  
    $(function() {
        let paymentmode = document.getElementById('paymentmode_c').value;
        if(paymentmode=="Cash"){
            $('#jump_quote_jump_autofinancing_1_create_button').prop('disabled', true);
            $('#jump_quote_jump_autofinancing_1_select_button').prop('disabled', true);
            
        }
    });
    
    $(document).on('click', '#jump_quote_jump_autofinancing_1_create_button', function(event) {
        
        setTimeout(function(){
        $('#amountfinanced_c').prop('readonly', true);
        $('#discount1_c').prop('readonly', true);
        $('#discount2_c').prop('readonly', true);
        $('#netdownpayment_c').prop('readonly', true);
    }, 1000);
    }); 

    $(document).on('click', '#jump_quote_jump_discount_1_create_button', function(event) {
        setTimeout(function(){
            var x = document.getElementById("paymentmode_c");
            var pay = x.value;
            //if(pay=="Cash"){
                $('#applyptodp_c').prop('disabled', true);
                $('#applyamounttodp_c').prop('disabled', true);
                $('#applyptoaf_c').prop('disabled', true);
                $('#applyamounttoaf_c').prop('disabled', true);
                $('#applyptoup_c').prop('readonly', true);
                $('#applyamounttoup_c').prop('readonly', true);
                
                setInterval(function(){
                    if(document.getElementById("discountamount_c") != null){
                        var x = document.getElementById("discountamount_c");
                        var y = document.getElementById("applyptoup_c");
                        var z = document.getElementById("applyamounttoup_c");
                        var dc = x.value;
                        var up = $('#unitprice_c').text();
                        var dcc = dc/up*100;
                        y.value = dcc;
                        var dpp = dcc/100*up;
                        z.value = dpp;
                    }
                }, 2000);
                
                
            //}
    }, 1000);
    }); 

    $(document).on('click', '#jump_quote_jump_autofinancing_1_create_button', function(event) {
        setTimeout(function(){
                setInterval(function(){
                    if(document.getElementById("financingterm_c") != null){
                        var x = document.getElementById("financingterm_c");
                        var z = document.getElementById("monthlyamortization_c");
                        var ft;
                        if(!x.value){
                            ft=0
                        }else{
                            ft = parseInt(x.value);
                        }
                        var up = $('#unitprice_c').text();
                        var am = up/ft;
                        
                        if(am.toFixed(2)!="Infinity"){
                            z.value = am.toFixed(2);
                        }
                        
                    }
                }, 2000);
        }, 1000);
    }); 
    $(document).on('change', '#discountamount_c', function(event) {
        
        event.preventDefault();
        var x = document.getElementById("discountamount_c");
        var y = document.getElementById("applyptoup_c");
        var z = document.getElementById("applyamounttoup_c");
        var dc = x.value;
        var up = $('#unitprice_c').text();
        var dcc = dc/up*100;
        y.value = dcc;
        var dpp = dcc/100*up;
        z.value = dpp;
    });
    
	$(document).on('keyup', '#downpayment_c', function(event) {
        
        event.preventDefault();
        var x = document.getElementById("downpayment_c");
        var z = document.getElementById("downpaymentp_c");
        var y = document.getElementById("amountfinanced_c");
        var w = document.getElementById("netdownpayment_c");
        var e = document.getElementById("discount2_c");
        var dpd = e.value;
        var dp = x.value;
        var up = $('#unitprice_c').text();
        var dpp = dp/up*100;
        z.value = dpp.toFixed(2);
        var af = up-dp;
        y.value = af;
        w.value = dp-dpd;
    });
    
    $(document).on('keyup', '#downpaymentp_c', function(event) {
        event.preventDefault();
        var x = document.getElementById("downpaymentp_c");
        var z = document.getElementById("downpayment_c");
        var y = document.getElementById("amountfinanced_c");
        var w = document.getElementById("netdownpayment_c");
        var e = document.getElementById("discount2_c");
        var dpd = e.value;
        var dpp = x.value;
        var up = $('#unitprice_c').text();
        var dp = dpp/100*up;
        z.value = dp;
		var af = up-dp;
        y.value = af;
        w.value = dp-dpd;
	});
    $(document).on('keyup', '#totalpremium_c', function(event) {
        
        event.preventDefault();
        var x = document.getElementById("totalpremium_c");
        var z = document.getElementById("ctpl_c");
        var y = document.getElementById("totalinsurancecharges_c");
        var tp;
        var ct;
        if(!z.value){
            ct=0
        }else{
            ct = parseInt(z.value);
        }
        if(!x.value){
            tp=0
        }else{
            tp = parseInt(x.value);
        }
        y.value = tp + ct;
    });
    $(document).on('keyup', '#ctpl_c', function(event) {
        
        event.preventDefault();
        var x = document.getElementById("totalpremium_c");
        var z = document.getElementById("ctpl_c");
        var y = document.getElementById("totalinsurancecharges_c");
        var tp;
        var ct;
        if(!x.value){
            tp=0
        }else{
            tp = parseInt(x.value);
        }
        if(!z.value){
            ct=0
        }else{
            ct = parseInt(z.value);
        }
        y.value = tp + ct;
    });
});

