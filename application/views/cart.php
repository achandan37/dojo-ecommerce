<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.css">
</head>
<style>
.all{
	padding-top: 20px;
	}
.customerinfo{
	margin-left: 50px;
	padding: 10px;
	width:200px;
	height:350px;
	border: 1px solid black;
	display: inline-block;
	}
.table{
	width:800px;
	margin: 0 auto;
	}
.table-responsive{
	display: inline-block;
	vertical-align: top;

	}
.bottomcontent{
	width: 800px;
	margin: 0 auto;
	}
.status{
	border: 1px solid black;
	width: 200px;
	height: 30px;
	background-color: green;
	vertical-align: top;
	margin-left: 20px;
	padding:4px;
	display: inline-block;
	}
.totals{
	display: inline-block;
	border: 1px solid black;
	vertical-align: top;
	margin-left: 477px;
	}
.content{
	display: inline-block; 
	vertical-align: top;
	}
.continue{
	background-color: green;
	width: 150px; 
	color: white; 
	text-align: center;
	margin-left: 650px;
	border:2px solid black;
	}

.customerinput{
	margin-top: 20px;
	margin-bottom: 200px;
	}

</style>


<div class="container-fluid">
	<div class="all">
		<div class="row">
			<div class="column-md-offset-2 column-md-8">
				<table class="table table-striped table-bordered ">
					<thead>
						<tr>
							<th>Item</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Black Belt for Staff</td>
							<td>$19.99</td>
							<td>1 <a href="#">update</a><a href="#"> trash</a></td>
							<td>$19.99</td>
						</tr>
						<tr>
							<td>CodingDojo Cups</td>
							<td>$9.99</td>
							<td>3 <a href="#">update</a><a href="#"> trash</a></td>
							<td>$29.97</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="bottomcontent">
				<p class="text-right">Total: $49.96</p>
				<div class="continue">
					Continue Shopping
				</div>
			</div>
			<div class="customerinput">
				
				<form class="form-horizontal">
					<div class="row">
						<h3 class="col-sm-offset-2 col-sm-3">Shipping Information</h3>
					</div>
					<div class="form-group">
						<label for="ShippingFirstName" class="col-sm-offset-2 col-sm-2 control-label"> First Name: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingFirstName">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingLastName" class="col-sm-offset-2 col-sm-2 control-label"> Last Name: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingLastName">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingAddress" class="col-sm-offset-2 col-sm-2 control-label"> Address: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingAddress">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingAddress2" class="col-sm-offset-2 col-sm-2 control-label"> Address 2: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingAddress2">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingCity" class="col-sm-offset-2 col-sm-2 control-label"> City: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingCity">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingState" class="col-sm-offset-2 col-sm-2 control-label"> State: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingState">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingZipCode" class="col-sm-offset-2 col-sm-2 control-label"> Zip Code: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingZipCode">
						</div>
					</div>



					<div class="row">
						<h3 class="col-sm-offset-2 col-sm-3">Billing Information</h3>
					</div>
					<div class="checkbox">
						<label class="col-sm-offset-3 col-sm-2">
							<input type="checkbox" > Same as Shipping
						</label>
					</div>
					<div class="form-group">
						<label for="BillingFirstName" class="col-sm-offset-2 col-sm-2 control-label"> First Name: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="BillingFirstName">
						</div>
					</div>
					<div class="form-group">
						<label for="BillingLastName" class="col-sm-offset-2 col-sm-2 control-label"> Last Name: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="BillingLastName">
						</div>
					</div>
					<div class="form-group">
						<label for="BillingAddress" class="col-sm-offset-2 col-sm-2 control-label"> Address: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="BillingAddress">
						</div>
					</div>
					<div class="form-group">
						<label for="BillingAddress2" class="col-sm-offset-2 col-sm-2 control-label"> Address 2: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="BillingAddress2">
						</div>
					</div>
					<div class="form-group">
						<label for="BillingCity" class="col-sm-offset-2 col-sm-2 control-label"> City: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="BillingCity">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingState" class="col-sm-offset-2 col-sm-2 control-label"> State: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingState">
						</div>
					</div>
					<div class="form-group">
						<label for="ShippingZipCode" class="col-sm-offset-2 col-sm-2 control-label"> Zip Code: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ShippingZipCode">
						</div>
					</div>
					<div class="form-group">
						<label for="CreditCard" class="col-sm-offset-2 col-sm-2 control-label"> Credit Card#: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="CreditCard">
						</div>
					</div>
					<div class="form-group">
						<label for="SecurityCode" class="col-sm-offset-2 col-sm-2 control-label"> Security Code: </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="SecurityCode">
						</div>
					</div>
					<div class="form-group">
						<label for="Expiration" class="col-sm-offset-2 col-sm-2 control-label"> Expiration: </label>
						<div class="col-sm-offset-2 col-sm-2">
							<input type="month" class="form-control" id="Expiration">
						</div>
					</div>
					<button type="submit" class="btn btn-default col-sm-offset-7 col-sm-1">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
</html>