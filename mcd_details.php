<?php
   session_start();
   $conn = mysqli_connect("localhost","root","","zomato");
   if(!empty($_SESSION)){
   	$is_logged_in = 1;
   }else{
   	$is_logged_in = 0;
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zomato</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.jumbotron{
		background-image: url('https://1000logos.net/wp-content/uploads/2017/03/symbol-McDonalds.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 500px;
	}
</style>
<body>

	<nav class="navbar bg-nav">
		<img src="img/logo.png" style="width: 160px;height: 50px">
		<?php
		  if($is_logged_in){
			echo '<a href="logout.php"><p class="text-white"><small>Hello, '.$_SESSION['name'].'</small><br><b style="margin-top: -10px">Logout</b></p></a>';
		}else{
			echo '<a href="login_form.php"><p class="text-white"><small>Hello, Signin</small><br><b style="margin-top: -10px">Accounts and Lists</b></p></a>';
		}

		?>
		
	</nav>

	<div class="jumbotron"></div>

<div class="container">
	<div class="row">
	<?php
	$query = "SELECT * FROM products WHERE category LIKE '%KFC%'";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result)){
	  echo '<div class="col-3">
	  <div class="card">
	  <div class="card_body">
	  <img src =" '.$row['bg'].' " class="card-img-top">
	  <a href="details.php?id='.$row['product_id'].'"><h5 class="card-title">'.$row['name'].'</h5></a>
	  <p class="card-text">Rs '.$row['price'].'</p>
	</div>
</div>
</div>';

}

	?>
		
		</div>
</div>


		
</body>
</html>