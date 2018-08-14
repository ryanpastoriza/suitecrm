<div id="mainContent" style="min-height:500px;">
	<h1>Sales Orders</h1>
	<table class="list view table-responsive">
		<thead>
			<th></th>
			<th>VSO No.</th>
			<th>VSO Date</th>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Model Description</th>
			<th>Color</th>
			<th>Document Status</th>
			<th>Sales Executive</th>
			<th>SO Status</th>
			<th>Created On</th>
			<th>Created By</th>
		</thead>
		<tbody>
			<tr v-for="so in salesOrders" @click="gotoDetails(so.so_id)">
				<td><input type="checkbox"></td>
				<td>{{so.sales_order_no}}</td>
				<td>{{so.date_entered}}</td>
				<td>{{so.customer_id}}</td>
				<td>{{so.fname + " " + so.fname}}</td>
				<td>{{so.productname}}</td>
				<td>{{so.preferred_color_1}}</td>
				<td>Complete</td>
				<td>Jyde</td>
				<td>Open</td>
				<td>{{so.date_entered}}</td>
				<td>Leo</td>
			</tr>
			<tr>
				<td><input type="checkbox"></td>
				<td>3G616HBN</td>
				<td>06/15/2018</td>
				<td>CUS_9854614</td>
				<td>Bryan Bahala</td>
				<td>Mitsubishi Mirage GLS</td>
				<td>Purple Twitch</td>
				<td>Incomplete</td>
				<td>Dale</td>
				<td>Open</td>
				<td>06/12/2018</td>
				<td>Leo</td>
			</tr>
		</tbody>
	</table>
</div>
<script src="custom/include/resources/js/vue.js"></script>
<script>
	(function() {
	   	// document.getElementsByClassName('error')[1].className = "hide";

	   	new Vue({
			el: "#mainContent",

			data: {
				salesOrders:[],
				currentSO:{},
			},

			methods: {
				fetchSalesOrders: function(){
					$.get("http://localhost/suitedms/index.php?module=jump_sales_order&action=orders_list", function(data){
						this.salesOrders = JSON.parse(data);
						console.log(this.salesOrders);
					}.bind(this));
				},

				gotoDetails: function(id){
					// this.currentSQ = sq;
					window.location = "http://localhost/suitedms/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Djump_sales_order%26offset%3D1%26stamp%3D1529543566034243600%26return_module%3Djump_sales_order%26action%3DDetailView%26record%3D" + id;
					
				},
			},

			filters: {

			  	
			},

			mounted() {
				this.fetchSalesOrders();
			}

		});
	})();

</script>