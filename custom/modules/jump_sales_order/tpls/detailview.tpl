<div id="mainContent" style="min-height:500px;">
	<div class="head-panel">
		<div class="row">
			<div class="col-sm-6">
				<label for="" style="color:#777;">SALES ORDER</label>
				<h3 class="sales-order-label">{$result->id}</h3>
			</div>
			<div class="col-sm-6">
				<div class="pull-right">
					<a href="#" class="btn btn-default" style="margin-right:5px;"><i class="glyphicon glyphicon-list-alt"></i> Create Invoice</a>
					<a href="#" class="btn btn-default" style="margin-right:5px;"><i class="glyphicon glyphicon-floppy-saved"></i> Save</a>
					<a href="#" class="btn btn-default" style="margin-right:5px;"><i class="glyphicon glyphicon-floppy-remove"></i> Delete</a>
					<a href="#" class="btn btn-default" style="margin-right:5px;"><i class="glyphicon glyphicon-repeat"></i> Recalculate</a>
					<a href="#" class="btn btn-default" style="margin-right:5px;"><i class="glyphicon glyphicon-print"></i> Print</a>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading ">
			<a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-1" aria-expanded="false">
				<div class="col-xs-10 col-sm-11 col-md-11">
					Summary
				</div>
			</a>
		</div>

		<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_ACCOUNT_INFORMATION">
			<div class="row">
				<div class="col-md-3">
					<div class="head">
						<h3>Customer Information</h3>
					</div>
					<div class="body">
						<form action="">
							<div class="form-group">
								<label for="">Customer Name</label>
								<div class="input-group">
								   <input type="text" class="block" disabled>
								   <span class="input-group-btn">
								        <button @click="fetchCustomer()" data-toggle="modal" data-target="#customerModal" class="btn btn-danger" type="button" style="border-radius:4px;"><i class="suitepicon suitepicon-action-select"></i></button>
								   </span>
								</div>								
							</div>
							<div class="form-group">
								<label for="">Customer ID</label>
								<input type="text" class="block" disabled>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Customer Type</label>
										<select name="" id="" class="block">
											<option value="">Walk-In</option>
											<option value="">Online</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Customer TIN</label>
										<input type="text" class="block" disabled>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Customer Address</label>
								<input type="text" class="block" disabled>
							</div>
						</form>
					</div>
					<div class="head">
						<h3>Other Information</h3>
					</div>
					<div class="body">
						<form action="">
							<div class="form-group">
								<label for="">Vehicle Sales Order No.</label>
								<input type="text" class="block">
							</div>
							<div class="form-group">
								<label for="">Quote ID</label>
								<input type="text" class="block">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Payment Mode</label>
										<select name="" id="" class="block"></select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Lead Source</label>
										<input type="text" class="block">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Sales Executive</label>
								<input type="text" class="block">
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
									<input type="text" class="block">
								</div>
								<div class="form-group">
									<label for="">Preferred Color 1</label>
									<select name="" id="" class="block"></select>
								</div>
								<div class="form-group">
									<label for="">Preferred Color 2</label>
									<select name="" id="" class="block"></select>
								</div>
								<div class="form-group">
									<label for="">Preferred Color 3</label>
									<select name="" id="" class="block"></select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Vehicle Unit Price</label>
									<input type="text" class="block">
								</div>
								<div class="form-group">
									<label for="">Vehicle Details</label>
									<div class="vehicle-details">
										<ul>
											<li>Model Year: 2016</li>
											<li>Model Code: WXYZ</li>
											<li>Option Code: QRSTUV</li>
											<li>Vehicle Type: SUV</li>
											<li>Body Type: Wagon</li>
											<li>Gross Vehicle Weight: 1,460 KG</li>
											<li>Piston Displacement: None</li>
											<li>Fuel Type: Diesel</li>
											<li>Warranty Years: 3</li>
											<li>Warranty Mileage: 100,000</li>
											<li>Transmisson: Manual</li>
											<th>Others</th>
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
					<div class="body">
						<div class="buttons">
							<button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>ADD</button>
							<button disabled><i class="glyphicon glyphicon-floppy-save"></i>SAVE</button>
							<button disabled><i class="glyphicon glyphicon-trash"></i>CANCEL</button>
							<button class="btn btn-success"><i class="glyphicon glyphicon-remove"></i>REMOVE</button>
						</div>
						<table class="list view table-responsive">
							<thead>
								<th>Free</th>
								<th>Item Number</th>
								<th>Item Description</th>
							</thead>
							<tbody>
							</tbody>
						</table>
						<p>No items found.</p>
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
										<span class="p-value">PHP 945,000.00</span>
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

	<div class="panel panel-default">
		<div class="panel-heading ">
			<a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-2" aria-expanded="false">
				<div class="col-xs-10 col-sm-11 col-md-11">
					Order Details
				</div>
			</a>
		</div>

		<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-2" data-id="LBL_ACCOUNT_INFORMATION" style="padding:40px 10px;">
			<ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#home">AUTO FINANCING</a></li>
			    <li><a data-toggle="tab" href="#menu1">DISCOUNTS</a></li>
			    <li><a data-toggle="tab" href="#menu2">CHARGES</a></li>
			    <li><a data-toggle="tab" href="#menu3">INSURANCE CHARGES</a></li>
			    <li><a data-toggle="tab" href="#menu4">RESERVATION</a></li>
			  </ul>

			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			      <div class="row">
			      	<div class="col-md-6">
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Bank</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Scheme</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      		</div>
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Chattel Fee</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="" class="block">Free Chattel Fee</label>
									<input type="checkbox" class="block">
								</div>
			      			</div>
			      		</div>
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
			      					<button class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i>SAVE</button>
									<button disabled><i class="glyphicon glyphico-close"></i>CANCEL</button>
			      				</div>
			      			</div>
			      		</div>
			      		<div class="col-md-12">
			      			<table class="list view table-responsive table-striped center-table">
			      				<thead>
			      					<th>Select Term</th>
			      					<th>Financial Term</th>
			      					<th>Monthly Amortization</th>
			      				</thead>
			      				<tbody>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>10</td>
			      						<td>82,035</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>12</td>
			      						<td>25,024</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>15</td>
			      						<td>32,125</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>17</td>
			      						<td>54,521</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>19</td>
			      						<td>100,000</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>24</td>
			      						<td>91,248</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>28</td>
			      						<td>65,145</td>
			      					</tr>
			      					<tr>
			      						<td><input type="checkbox"></td>
			      						<td>30</td>
			      						<td>42,154</td>
			      					</tr>
			      				</tbody>
			      			</table>
			      		</div>
			      	</div>

			      	<div class="col-md-6">
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Down Payment</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Amount Financed</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      		</div>
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">Downpayment%</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">(-) Discount</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      		</div>
			      		<div class="row" style="margin-bottom:60px;">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">(-) Discount</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      		</div>
			      		<div class="row">
			      			<div class="col-md-6">
			      				<div class="form-group">
									<label for="">NET Down Payment</label>
									<input type="text" class="block">
								</div>
			      			</div>
			      		</div>
			      	</div>
			      </div>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      	<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>ADD</button>
			      	<table class="list view table-responsive table-striped center-table">
	      				<thead>
	      					<th><i class="glyphicon glyphicon-check"></i></th>
	      					<th>Description</th>
	      					<th>Discount Amount</th>
	      					<th>Apply % to DP</th>
	      					<th>Apply Amount to DP</th>
	      					<th>Apply % to AF</th>
	      					<th>APply Amount to AF</th>
	      					<th>Apply % to UP</th>
	      					<th>Apply Amount to UP</th>
	      				</thead>
	      				<tbody>
	      					
	      				</tbody>
      			   	</table>
      				<p class="no-records" style="margin-bottom:20px;">No records found.</p>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<div class="row">
				      			<div class="col-md-6">
				      				
				      			</div>
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Total Discount</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      		</div>
				      		<div class="row">
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to DP %</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to DP Amount</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      		</div>
				      		<div class="row">
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to AF %</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to AF Amount</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      		</div>
				      		<div class="row">
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to UP %</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      			<div class="col-md-6">
				      				<div class="form-group">
										<label for="">Apply to UP Amount</label>
										<input type="text" class="block">
									</div>
				      			</div>
				      		</div>
						</div>
					</div>
			    </div>
			    <div id="menu2" class="tab-pane fade">
			      <button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>ADD</button>
			      	<table class="list view table-responsive table-striped center-table">
	      				<thead>
	      					<th><i class="glyphicon glyphicon-check"></i></th>
	      					<th>Charge Type</th>
	      					<th>Charges Code</th>
	      					<th>Description</th>
	      					<th>Charge Amount</th>
	      					<th>Actual Cost</th>
	      				</thead>
	      				<tbody>
	      					
	      				</tbody>
      			   	</table>
      			   	<p class="no-records" style="margin-bottom:20px;">No records found.</p>
					<div class="form-group pull-right">
						<label for="">Total Charges</label>
						<input type="text" class="block">
					</div>
			    </div>
			    <div id="menu3" class="tab-pane fade">
			     	<div class="row">
		      			<div class="col-md-6">
		      				<div class="form-group">
								<label for="">Provider Company</label>
								<input type="text" class="block">
							</div>
							<div class="form-group">
								<label for="">Insurance Coverage</label>
								<input type="text" class="block">
							</div>
							<div class="form-group">
								<label for="">Total Premium</label>
								<input type="text" class="block">
							</div>
							<div class="form-group">
								<label for="">CTPL</label>
								<input type="text" class="block">
							</div>
							<div class="form-group">
								<label for="">Total Insurance Charges</label>
								<input type="text" class="block">
							</div>
		      			</div>
		      		</div>
			    </div>
			    <div id="menu4" class="tab-pane fade">
			     	<div class="row">
		      			<div class="col-md-6">
		      				<div class="form-group">
								<label for="">Reservation</label>
								<input type="text" class="block">
							</div>
						</div>
					</div>
			    </div>
			  </div>
		</div>
	</div>

	<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::: ORDER DETAILS :::::::::::::::::::::::::::::::::::::::::: -->

	<div class="panel panel-default">
		<div class="panel-heading ">
			<a class="" role="button" data-toggle="collapse" data-target="#detailpanel_-3" aria-expanded="false">
				<div class="col-xs-10 col-sm-11 col-md-11">
					Document Checklist
				</div>
			</a>
		</div>

		<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-3" data-id="LBL_ACCOUNT_INFORMATION" style="padding:40px 10px;">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Document Status</label>
						<input type="text" class="block">
					</div>
					<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>ADD</button>
					<button class="btn btn-default"><i class="glyphicon glyphicon-ok"></i>SUBMIT</button>
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
      					<tr>
      						<td><input type="checkbox"></td>
      						<td>No</td>
      						<td>Financing</td>
      						<td>2 Government Supplied & Valid ID(s) of maker & co-maker</td>
      						<td>Yes</td>
      					</tr>
      					<tr>
      						<td><input type="checkbox"></td>
      						<td>No</td>
      						<td>Financing</td>
      						<td>2 Government Supplied & Valid ID(s) of maker & co-maker</td>
      						<td>Yes</td>
      					</tr>
      					<tr>
      						<td><input type="checkbox"></td>
      						<td>No</td>
      						<td>Financing</td>
      						<td>2 Government Supplied & Valid ID(s) of maker & co-maker</td>
      						<td>Yes</td>
      					</tr>
      					<tr>
      						<td><input type="checkbox"></td>
      						<td>No</td>
      						<td>Financing</td>
      						<td>2 Government Supplied & Valid ID(s) of maker & co-maker</td>
      						<td>Yes</td>
      					</tr>
      				</tbody>
      			</table>
			</div>
		</div>
	</div>
	<div class="status">
		<span class="pull-right">Open</span>
	</div>



	:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: MODALS ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

	<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-body" style="padding:0;">
					<div style="min-height:400px;">
						<table class="list view table-responsive table-striped" style="margin-bottom:16px;">
							<thead>
								<th><i class="glyphicon glyphicon-check"></i></th>
								<th>Customer ID</th>
								<th>Customer Name</th>
								<th>Date Joined</th>
							</thead>
							<tbody>
								<tr v-for="c in customers.all">
									<td><i class="glyphicon glyphicon-ok"></i></td>
									<td>{{c.id}}</td>
									<td></td>
									<td>June 26, 2018</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
					<button class="btn btn-success pull-right">Select</button>
				</div>
			</div>
						<!-- /.modal-content -->	
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<script src="custom/include/resources/js/vue.js"></script>


