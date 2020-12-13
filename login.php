<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Registration System </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="headerh1"> 
		<h2><img class="img-logo" src="coldstoragelogo.jpg" alt="cold storage logo"></h2>
	</div>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
	<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>

		<div class="input-group">
			<button type="Login" name="Login" class="btn"> Login </button>
		</div>
		<p>
			Not yet a member? <a href="register.php"> Sign Up </a>
		</p>

	</form>
</body>
</html>