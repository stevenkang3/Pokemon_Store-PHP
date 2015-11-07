<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/assets/jquery.validate.js"></script>
	<script type="text/javascript" src="/assets/adminProductMain.js"></script>
	<link href="/assets/adminProductMain.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Nav Bar -->
	<div class='navbar navbar-inverse'>
		<div class='container'>
			<div class='navbar-header'>
				<p class='navbar-brand'>R</p>
			</div>
			<div>
				<ul class='nav navbar-nav'>
					<li><a href='/dashboards'>Orders</a></li>
					<li><a href='/products'>Products</a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='/admins/logout'>Log Off</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class='container'>
		<div class='row'>
			<form id='searchForm' action='/products/load_preview' method='post'>
				<input id='searchBar' class='col-md-4' type='text' name='search' placeholder='Search by Name or Type'>
				<input id='searchButton' class='btn btn-info btn-xs' type='submit' value='Search'>
			</form>
			<button id='addButton' class='btn btn-primary' type='button'>Add new product</button>
		</div>

<!-- Product Table -->
		<div class='row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<tr>
						<th class='col-md-1'>Picture</th>
						<th class='col-md-1'>ID</th>
						<th class='col-md-3'>Name</th>
						<th class='col-md-3'>Inventory Count</th>
						<th class='col-md-2'>Quantity Sold</th>
						<th class='col-md-2'>Action</th>
					</tr>
				</thead>
				<tbody id='productBody'>
<!-- Products Inserted Here -->
				</tbody>
			</table>
		</div>

<!-- Edit/Delete Modal added here -->
	<div id='modalArea'></div>
</body>
</html>
