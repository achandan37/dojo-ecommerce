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
.container-fluid{margin-top: 50px;}
</style>


<div class="container-fluid">
	<h3 class="text-center">Admin Login</h3>
	<form class="form-horizontal">
		<div class="form-group">
			<label for="loginemail" class="col-sm-offset-2 col-sm-2 control-label">Email Address</label>
			<div class="col-sm-4">
				<input type="email" class="form-control" id="loginemail">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-offset-2 col-sm-2 control-label">Password</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="loginpassword">
			</div>
		</div>
	<button type="submit" class="btn btn-success col-sm-offset-7 col-sm-1">Submit</button>
	</form>


</div>
</html>