<script>
	(function() {
	   	new Vue({
			el: "#mainContent",

			data: {
				salesOrder:{customer:{},vehicle:{},status:{}, origin:null, changed:false, docs:{all:[], submitted:[]}},
				customers:{all:[], current:{}},
				invoiceURL: "",
			},

			methods: {
				fetchCustomer: function(){
					$.get("<?php echo 'index.php?module=jump_sales_order&action=fetch_customers'; ?>", function(data){
						this.customers.all = JSON.parse(data);
						console.log(this.customers.all);
					}.bind(this));
				},

				fetchSalesOrder: function(){
					let data = "<?php echo $_GET['record'] ?>";
					$.get("<?php echo 'index.php?module=jump_sales_order&action=sales_order'; ?>", {data:data}, function(data){
						this.salesOrder = JSON.parse(data);
						// console.log(this.customers.all);
					}.bind(this));
				},

				selected: function(c){
					if(c.id_c == this.customers.current.id_c){
						return "selected-cus";
					}
					return "";
				},

				setSelected: function(){
					this.salesOrder.customer = this.customers.current;
					if(this.salesOrder.origin != this.customers.current.id_c){
						this.salesOrder.changed = true;
					}else{
						this.salesOrder.changed = false;
					}
					// console.log(this.salesOrder.changed);
				},

				saveSo: function(){
					let data = {customer:this.salesOrder.customer, id:this.salesOrder.id, changed:this.salesOrder.changed, reservation:this.salesOrder.reservation_amount};
					$.get("<?php echo 'index.php?module=jump_sales_order&action=store_so'; ?>", {data:data}, function(data){
						let res = JSON.parse(data);
						if(res == 1){
							this.fetchSalesOrder();
						}
						show_message('success', 'Updated successfully!', 'Saved!');
						// console.log(res);
					}.bind(this));
				},

				isSubmitted: function(doc){
					for(i in this.salesOrder.docs.submitted){
						if(doc.id == this.salesOrder.docs.submitted[i].doc_id){
							return "Yes";
						}
					}
					return "No";
				},

				docStatus: function(){
					if(this.salesOrder.docs.submitted.length >= this.salesOrder.docs.all.length){
						return "Completed";
					}
					return "In-Progress";
				},

				submitDoc: function(doc){
					let data = {doc:doc.id, so:this.salesOrder.sales_order_no};
					$.get("<?php echo 'index.php?module=jump_sales_order&action=submit_doc'; ?>", {data:data}, function(data){
						let res = JSON.parse(data);
						this.fetchDoc();
					}.bind(this));
				},

				fetchDoc: function(){
					let data = {so:this.salesOrder.sales_order_no};
					$.get("<?php echo 'index.php?module=jump_sales_order&action=fetch_doc'; ?>", {data:data}, function(data){
						let res = JSON.parse(data);
						this.salesOrder.docs = res;
						console.log(res);
					}.bind(this));
				},

				setStatus: function(status){
					let data = {status:status, so:this.salesOrder.id};
					$.get("<?php echo 'index.php?module=jump_sales_order&action=set_status'; ?>", {data:data}, function(data){
						let res = JSON.parse(data);
						// console.log(res);
						this.fetchSalesOrder();
					}.bind(this));
				},

				allocateVehicle: function(){
					$.get("<?php echo 'index.php?module=jump_sales_order&action=allocate_vehicle'; ?>", {data:this.salesOrder.sales_order_no}, function(data){
						let res = JSON.parse(data);
						show_message('success', 'Vehicle has been allocated!', 'Allocation Success!');
						// this.setStatus("For Invoicing");
						// console.log(res);
						this.fetchSalesOrder();
					}.bind(this));
				},

				copySo: function(e){
					e.preventDefault();
					var quantity = prompt("How many copies?");
					let data = {so:this.salesOrder.sales_order_no, quantity:quantity};
					if(quantity != ''){
						$.get("<?php echo 'index.php?module=jump_sales_order&action=copy_so'; ?>", {data:data}, function(data){
							let res = JSON.parse(data);
							console.log(res);
							// this.fetchSalesOrder();
						}.bind(this));
					}				
				},
			},

			filters: {

			  	
			},

			mounted() {
				this.fetchSalesOrder();
				this.invoiceURL = "<?php echo 'index.php?module=jump_sales_invoice&action=editview&id='; ?>";
			}

		});
	})();
</script>