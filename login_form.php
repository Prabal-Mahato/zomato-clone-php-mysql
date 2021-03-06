<?php


session_start();

if(!empty($_SESSION)){
	header('Location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.container{
		max-width: 350px;
	}
</style>
<body>
	<nav class="navbar bg-nav">
		<img src="img/logo.png" style="width: 100px;height: 50px">
	</nav>

	<div class="container">
			<div class="card p-3">
				<h3>Sign-In</h3>
				<?php
				if(!empty($_GET)){
					if($_GET['error'] == 1){
						echo '<p style="color:red">Incorrect email/Password</p>';
					}
					
				}

				?>
				<form action='login_validation.php' method='POST'>
					<label>Email</label>
				<input type="email" name="email" class="form-control"><br>
				<label>Password</label>
				<input type="password" name="password" class="form-control"><br>
				<input type="submit" class="btn btn-danger btn-block" value="Login">
				</form>
				
				<small class="mt-2">Not a Member? <a href="registration_form.php">Sign Up here</a></small>
			</div>
	</div>
</body>
</html>