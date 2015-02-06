<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Order Details</title>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.css">
</head>
<style>
.all{padding-top: 20px;}
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
	}
.table-responsive{
	display: inline-block;
	vertical-align: top;
	margin-left: 20px;
	margin-top: 20px;
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
</style>
<div class="all">
	<div class="customerinfo">

	Order ID:1<br><br>
	Customer shipping info:<br>
	name: bob<br>
	address:123 dojo way<br>
	city: seattle<br>
	state: wa<br>
	zip 98133<br><br>

	customer billing info:<br>
	name: bob<br>
	address:123 dojo way<br>
	city: seattle<br>
	state: wa<br>
	zip: 98133<br>

	</div>
	<div class="content">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>35</td>
						<td>cup</td>
						<td>$9.99</td>
						<td>1</td>
						<td>$9.99</td>
					</tr>
					<tr>
						<td>215</td>
						<td>shirt</td>
						<td>$19.99</td>
						<td>2</td>
						<td>$39.98</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="bottomcontent">
			<div class="status">
				Status: shipped
			</div>

			<div class="totals">
				Sub total: $29.98<br>
				Shipping: $1.00<br>
				Total Price: $30.98<br>
			</div>
		</div>
	</div>
</div>

</html>