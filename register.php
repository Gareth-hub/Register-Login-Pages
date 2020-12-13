<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> Add/Remove Stock </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="headerh1"> 
		<h2><img class="img-logo" src="coldstoragelogo.jpg" alt="cold storage logo"></h2>
		<nav><!-- This is the Navigation bar-->
			<ul>
				<li>
					<a href="index.php">Dashboard</a>
					<a href="viewallstock.php">View</a>
					<a href="searchstock.php">Search</a>
					<a href="removestock.php">Remove</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="header">
		<h2> Add Stock Item</h2>
	</div>
	<form method="post" action="register.php">
	<?php include('errors.php') ?>
	
		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="productname">
		</div>
		<div class="input-group">
			<label>Product Weight</label>
			<input type="text" name="productweight">
		</div>
		<div class="input-group">
			<label>Quantity</label>
			<input type="text" name="quantity">
		</div>
		<div class="input-group">
			<label>Temperature Stored At</label>
			<input type="text" name="temperaturestoredat">
		</div>
		<div class="input-group">
			<label>Best Before Date</label>
			<input type="text" name="bestbeforedate">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price">
		</div>
		<div class="input-group">
			<label>Net Cost</label>
			<input type="text" name="netcost">
		</div>
		<div class="input-group">
			<label>Supplier ID</label>
			<input type="text" name="supplierid">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn"> Register </button>
		</div>

	</form>
</body>
</html>